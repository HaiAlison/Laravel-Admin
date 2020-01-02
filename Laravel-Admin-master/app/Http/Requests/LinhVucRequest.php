<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinhVucRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_linh_vuc'=>'required|unique:linh_vuc,ten_linh_vuc|string|max:255'
        ];
    }
    public function messages()
    {
        return [
            'ten_linh_vuc.required'=>'Nhập tên lĩnh vực vào con zai',
            'ten_linh_vuc.unique'=>'Tên lĩnh vực đã tồn tại',
            'ten_linh_vuc.string' => 'Tên lĩnh vực phải là ký tự',
            'ten_linh_vuc.max' => 'Tên lĩnh vực không quá 255 ký tự'
            
        ];
    }
}
