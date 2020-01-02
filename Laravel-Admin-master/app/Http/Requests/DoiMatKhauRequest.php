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
            'mat_khau'=>'required|confirmed|max:200'
        ];
    }
    public function messages()
    {
        return [
            'mat_khau.required'=>'Mật khẩu không được rỗng',
            'mat_khau.confirmed'=>'Nhập lại mật khẩu không hợp lệ',
            'mat_khau.max' => 'Mật khẩu không quá 200 ký tự'
            
        ];
    }
}
