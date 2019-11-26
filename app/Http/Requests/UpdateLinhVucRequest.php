<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLinhVucRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'ten_linh_vuc'=>'required|string|max:255'
        ];
    }
    public function messages()
    {
        return [
            'ten_linh_vuc.required'=>'Nhập tên lĩnh vực vào con zai',
            'ten_linh_vuc.string' => 'Tên lĩnh vực phải là ký tự',
            'ten_linh_vuc.max' => 'Tên lĩnh vực không quá 255 ký tự'
            
        ];
    }
}
