<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoiMatKhauRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password_old' => 'required|min:4',
            'password' => 'required|min:4',
            'repassword' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'password_old.required' => 'Vui lòng nhập mật khẩu cũ',
            'password_old.min' => 'Vui lòng nhập mật khẩu cũ từ 4 ký tự',
            'password.required' => 'Vui lòng nhập mật khẩu mới',
            'password.min' => 'Vui lòng nhập mật khẩu mới từ 4 ký tự',
            'repassword.same' => 'Mật khẩu nhập lại không khớp',
        ];
    }
}
