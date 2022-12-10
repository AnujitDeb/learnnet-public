<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVideoRequest extends FormRequest
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
//        dd('anujit');
        return [
            'videoLink' => 'required|string',
            'title' => 'required|string',
            'duration' => 'required|string',
            'status' => 'required|string',
            'thumbnail' => 'required',
            'thumbnail.*' => 'required|distinct|mimes:jpeg,png,jpg,svg|max:5120',
            'course_id' => 'required|numeric',
        ];
    }
}
