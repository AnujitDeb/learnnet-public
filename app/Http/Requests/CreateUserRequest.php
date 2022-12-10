<?php

namespace App\Http\Requests;

use App\Enums\UserType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
            'email' => 'email|required|unique:users,email',
            'phone' => 'numeric|unique:users,phone',
            'password' => 'required|min:6',
            'confirm_password' => 'same:password',
            'country' => 'nullable|string',
            'institution' => 'nullable|string',
            'image' => 'nullable',
            'image.*' => 'distinct|mimes:jpeg,png,jpg,svg|max:10240',
            'skill' => 'nullable|string',
            'type' => [Rule::in(UserType::Student, UserType::Instructor, UserType::Admin)]
        ];
    }
}
