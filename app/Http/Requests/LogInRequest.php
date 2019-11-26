<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogInRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // chưa validation ảnh đại diện
        return [
            'ten_dang_nhap'=>'required',
            'mat_khau'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required'=>'Vui lòng nhập tên đăng nhập',
            'mat_khau.required'=>'Vui lòng nhập mật khẩu',
        ];
    }
}

