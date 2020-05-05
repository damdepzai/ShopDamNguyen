<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Requestpassword extends FormRequest
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
           'password_old'=>'required',
           'password_new'=>'required',
           'password_comfirm'=>'required|same:password_new',
        ];
    }
    public function messages()
    {
        return [
            'password_old.required'=>'Mật khẩu cũ không được để trống',
            'password_new.required'=>'Mật khẩu mới không được để trống',
            'password_comfirm.required'=>'Bạn phải nhập lại mật khẩu mới',
            'password_comfirm.same'=>'Mật khẩu không khớp',
        ];
    }
}
