<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'price'=>'required',
            'hometown'=>'required',
            'species'=>'required',
            'inputFile'=>'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Tên sản phẩm không được để trống',
          'price.required'=>'Tên sản phẩm không được để trống',
          'hometown.required'=>'Tên sản phẩm không được để trống',
          'species.required'=>'Tên sản phẩm không được để trống',
          'inputFile.required'=>'Tên sản phẩm không được để trống'
        ];
    }

}
