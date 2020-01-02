<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'noi_dung'=>'required|string|max:255',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'noi_dung.required'=>'Nhập nội dung vào con zai',
            'noi_dung.string'=>'Câu hỏi phải là chuỗi',
            'noi_dung.max' => 'Nội dung câu hỏi không quá 255 ký tự',
            'phuong_an_a.required'=>'Phương án A không được rỗng',
            'phuong_an_b.required'=>'Phương án B không được rỗng',
            'phuong_an_c.required'=>'Phương án C không được rỗng',
            'phuong_an_d.required'=>'Phương án D không được rỗng',
            'dap_an.required'=>'Đáp án không được rỗng',
        ];
    }
}
