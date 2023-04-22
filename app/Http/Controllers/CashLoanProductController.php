<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCashLoanProductRequest;
use App\Models\CashLoanProduct;
use App\Models\Client;

class CashLoanProductController extends Controller
{
    /**
     * Update or create the cash loan product
     */
    public function __invoke(UpdateCashLoanProductRequest $request, Client $client)
    {
        $client->cashLoanProduct()->updateOrCreate($request->validated(), [
            'adviser_id' => auth()->id()
        ]);

        return back()->withStatus('You have successfully updated the cash loan product!');
    }
}
