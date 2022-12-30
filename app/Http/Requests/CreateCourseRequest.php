<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCourseRequest extends FormRequest
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
            'title' => 'required|min:3|string',
            'description' => 'required|min:5|max:5000',
            'prerequisite' => 'nullable|string',
            'thumbnail' => 'required',
            'thumbnail.*' => 'required|distinct|mimes:jpeg,png,jpg,svg|max:5120',
            'instructor_id' => 'nullable|numeric',
//            'material_id' => 'nullable|numeric',
            'status' => 'required|string',
            'originalPrice' => 'required|numeric|gt:-1',
            'discountedPrice' => 'nullable|numeric|lt:originalPrice|gt:-1'
        ];
    }
}
//required|image|mimes:jpeg,png,jpg,gif,svg|max:2048
//required|file|mimes:jpeg,png,jpg,gif,svg,ppt,pdf,doc,csv,xls,db,sqlite,accdb,mdb|max:10240
