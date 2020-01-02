<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCauHinhAppRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'co_hoi_sai'=>'required|numeric|between:0,50',
            'thoi_gian_tra_loi'=>'required|numeric|between:10,30'
        ];
    }
    public function messages()
    {
        return [
            'co_hoi_sai.required' => 'Cơ hội sai không được rỗng',
            'co_hoi_sai.numeric' => 'Cơ hội sai phải là ký số',
            'co_hoi_sai.between' => 'Cơ hội sai chỉ từ 0% đến 50% ',
            'thoi_gian_tra_loi.required' => 'Thời gian trả lời không được rỗng',
            'thoi_gian_tra_loi.numeric' => 'Thời gian trả lời phải là ký số',
            'thoi_gian_tra_loi.between' => 'Thời gian trả lời chỉ từ 10s đến 30s '
        ];
    }
}

