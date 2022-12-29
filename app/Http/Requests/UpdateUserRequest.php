<?php

namespace App\Http\Requests;

use App\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'first_name' => 'required|min:3|string',
            'last_name' =>'required|min:1|string',
            'email' => 'email|required|unique:users,email,' . request()->user_id,
            'phone' => 'required|numeric|unique:users,phone,' . request()->user_id,
            'password' => 'nullable|min:6',
            'confirm_password' => 'same:password',
            'country' => 'nullable|string',
            'institution' => 'nullable|string',
            'image' => 'nullable',
            'image.*' => 'distinct|mimes:jpeg,png,jpg,svg|max:10240',
            'skill' => 'nullable|string',
            'user_id' => 'required|numeric'
        ];
    }
}
