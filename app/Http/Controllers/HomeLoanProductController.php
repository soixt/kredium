<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHomeLoanProductRequest;
use App\Models\Client;
use App\Models\HomeLoanProduct;

class HomeLoanProductController extends Controller
{
    /**
     * Update or create the cash loan product
     */
    public function __invoke(UpdateHomeLoanProductRequest $request, Client $client)
    {
        $client->homeLoanProduct()->updateOrCreate($request->validated(), [
            'adviser_id' => auth()->id()
        ]);

        return back()->withStatus('You have successfully updated the home loan product!');
    }
}
