<?php

namespace App\Http\Requests;

use App\Enums\UserType;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateAdminRequest extends FormRequest
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
            'last_name' => 'required|min:1|string',
            'email' => 'email|required|unique:users,email',
            'phone' => 'numeric|unique:users,phone',
            'institution' => 'nullable|string',
            'country' => 'nullable|string',
            'skills' => 'nullable|string',
            'password' => 'required|min:6',
            'confirm_password' => 'same:password',
            'type' => [Rule::in(UserType::Student, UserType::Instructor, UserType::Admin)]
        ];
    }
}
