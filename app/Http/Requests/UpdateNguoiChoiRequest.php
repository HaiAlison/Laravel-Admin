<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNguoiChoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // chưa validation ảnh đại diện
        return [
            'email'=>'required|email',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Email không được rỗng',
            'email.email'=>'Email không đúng định dạng'
        ];
    }
}
