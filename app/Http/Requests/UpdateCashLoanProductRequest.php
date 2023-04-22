<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashLoanProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (is_null($this->route('client')->cashLoanProduct)) {
            return true;
        }

        return (bool) !is_null($this->route('client')->cashLoanProduct) && $this->route('client')->cashLoanProduct->editable(auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'loan_amount' => 'required|numeric',
        ];
    }
}
