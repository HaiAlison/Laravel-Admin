<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NguoiChoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // chưa validation ảnh đại diện
        return [
            'ten_dang_nhap'=>'required|unique:nguoi_choi,ten_dang_nhap|string|max:100',
            'mat_khau'=>'required|min:8|max:30',
            'email'=>'required|email',
            'hinh_dai_dien'=>'image|mimes:jpeg,png,jpg,gif',
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required'=>'Nhập tên đăng nhập vào con zai',
            'ten_dang_nhap.unique'=>'Tên đăng nhập đã tồn tại',
            'ten_dang_nhap.string'=>'Tên đăng nhập phải là chuỗi',
            'ten_dang_nhap.max' => 'Tên đăng nhập không quá 100 ký tự',
            'mat_khau.required'=>'Mật khẩu không được rỗng',
            'mat_khau.min'=>'Mật khẩu phải ít nhất 8 ký tự',
            'mat_khau.max'=>'Mật khẩu không quá 30 ký tự',
            'email.required'=>'Email không được rỗng',
            'email.email'=>'Email không đúng định dạng',
            'hinh_dai_dien.image' => 'Yêu cầu phải là ảnh',
            'hinh_dai_dien.mimes'=> 'Không đúng định dạng ảnh',
        ];
    }
}
