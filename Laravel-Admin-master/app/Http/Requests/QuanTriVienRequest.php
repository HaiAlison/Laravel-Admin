<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuanTriVienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_dang_nhap'=>'required|unique:quan_tri_vien,ten_dang_nhap|max:100',
            'mat_khau'=>'required|min:6|max:30',
            'anh_dai_dien'=>'image|mimes:jpeg,png,jpg,gif',
            'ho_ten'=>'required|string'
        ];
    }
    public function messages()
    {
        return [
            'ten_dang_nhap.required'=>'Nhập tên đăng nhập vào con zai',
            'ten_dang_nhap.unique'=>'Tên đăng nhập đã tồn tại',
            'ten_dang_nhap.max'=>'Tên đăng nhập không quá 100 ký tự',
            'mat_khau.required' => 'Mật khẩu không được rỗng',
            'mat_khau.min' => 'Mật khẩu ít nhất 6 ký tự',
            'mat_khau.max' => 'Mật khẩu tối đa 30 ký tự',
            // 'anh_dai_dien.required' => 'Vui lòng hãy chọn 1 ảnh',
            'anh_dai_dien.image' => 'Yêu cầu phải là ảnh',
            'anh_dai_dien.mimes'=> 'Không đúng định dạng ảnh',
            'ho_ten.required' => 'Họ tên không được rỗng',
            'ho_ten.string' => 'Họ tên phải là ký tự',
        ];
    }
}
