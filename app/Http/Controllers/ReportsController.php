<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportsController extends Controller
{
    public function index () {
        return view('reports', [
            'products' => auth()->user()->homeLoanProducts()->select([
                DB::raw("'Home Loan' as type"),
                DB::raw("CONCAT(down_payment_amount, ' - ', property_value) as value"),
                DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s') AS date")
            ])->union(auth()->user()->cashLoanProducts()->select([
                DB::raw("'Cash Loan' as type"),
                DB::raw("loan_amount as value"),
                DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s') AS date")
            ]))->orderByDesc('date')->paginate(10)
        ]);
    }

    public function export () {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }
}
