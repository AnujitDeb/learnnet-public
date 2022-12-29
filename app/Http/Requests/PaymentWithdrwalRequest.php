<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentWithdrwalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'email|required',
            'password' => 'required',
            'amount' => 'numeric|required',
            'accountNo' => 'string|required',
            'transactionMethod' => 'required|string',
            'user_id' => 'required|numeric',
            'instructor_name' => 'string|required',
            'instructor_phone' => 'string|required'
        ];
    }
}
