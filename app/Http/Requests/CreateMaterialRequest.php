<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMaterialRequest extends FormRequest
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
            'title' => 'required|string|min:3',
            'file' => 'required',
            'file.*' => 'required|distinct|mimes:jpeg,png,jpg,gif,svg,ppt,pptx,pdf,doc,csv,xlx,xls,db,sqlite,accdb,mdb|max:10240',
            'courseId' => 'required|numeric'
        ];
    }
}
