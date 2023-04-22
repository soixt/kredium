<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->homeLoanProducts()->select([
            DB::raw("'Home Loan' as type"),
            DB::raw("CONCAT(down_payment_amount, ' - ', property_value) as value"),
            DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s') AS date")
        ])->union(auth()->user()->cashLoanProducts()->select([
            DB::raw("'Cash Loan' as type"),
            DB::raw("loan_amount as value"),
            DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s') AS date")
        ]))->orderByDesc('date')->get();
    }
}
