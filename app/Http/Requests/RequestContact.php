<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
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
            'phone'=>'required',
            'email'=>'required',
            'content_text'=>'required',
            'address'=>'required',
            'title'=>'required',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên không được để trống',
          'phone.required' => 'Số điện thoại không được để trống',
          'email.required' => 'Email không được để trống',
          'title.required' => 'Tiêu đề không được để trống',
          'address.required' => 'Địa chỉ không được để trống',
          'content_text.required' => 'Nội dung không được để trống',
        ];
    }
}
