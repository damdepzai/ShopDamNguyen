<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
//            'name'=>'required|unique:products,pro_name,'.$this->id,
            'description' =>'required',
            'price'=>'required',
            'number'=>'required',
        ];
    }
    public  function messages()
    {
        return [
          'name.required' =>'Tên sản phẩm không được để trống',
//            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'description.required'=>'Mô tả không được để trống',
            'price.required'=>'Bạn phải nhập giá của sản phẩm',
            'number.required'=>'Bạn phải nhập số lượng sản phẩm'
        ];
    }
}
