<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuanTriVienRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ho_ten'=>'required|string',
            'anh_dai_dien'=>'image|mimes:jpeg,png,jpg,gif',
        ];
    }
    public function messages()
    {
        return [
            'ho_ten.required' => 'Họ tên không được rỗng',
            'ho_ten.string' => 'Họ tên phải là ký tự',
            // 'anh_dai_dien.required' => 'Vui lòng hãy chọn 1 ảnh',
            'anh_dai_dien.image' => 'Yêu cầu phải là ảnh',
            'anh_dai_dien.mimes'=> 'Không đúng định dạng ảnh',
        ];
    }
}
