<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'address'=>'required',
            'phone'=>'required',
            'inputFile'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Tên khách hàng không được để trống',
            'address.required'=>'Đia chỉ khách hàng không được để trống',
            'phone.required'=>'Số điện thoại khách hàng không được để trống',
            'inputFile.required'=>'Ảnh khách hàng không được để trống'
        ];
    }
}
