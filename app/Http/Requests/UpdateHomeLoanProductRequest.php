<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHomeLoanProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (is_null($this->route('client')->homeLoanProduct)) {
            return true;
        }

        return (bool) !is_null($this->route('client')->homeLoanProduct) && $this->route('client')->homeLoanProduct->editable(auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'down_payment_amount' => 'required|numeric',
            'property_value' => 'required|numeric',
        ];
    }
}
