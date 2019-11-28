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
            'hinh_dai_dien'=>'image|mimes:jpeg,png,jpg,gif',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Email không được rỗng',
            'email.email'=>'Email không đúng định dạng',
            'hinh_dai_dien.image' => 'Yêu cầu phải là ảnh',
            'hinh_dai_dien.mimes'=> 'Không đúng định dạng ảnh',
        ];
    }
}
