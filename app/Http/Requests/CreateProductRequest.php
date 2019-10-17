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
            'city_id'=>'required',
            'species'=>'required',
            'inputFile'=>'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Tên sản phẩm không được để trống',
          'price.required'=>'Giá không được để trống',
          'city_id.required'=>'Địa điểm không được để trống',
          'species.required'=>'Loại sản phẩm không được để trống',
          'inputFile.required'=>'File không được để trống'
        ];
    }

}
