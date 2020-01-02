<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCauHinhDiemCauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'diem'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'diem.required' => 'Điểm không được rỗng',
            'diem.numeric' => 'Điểm phải là ký số'
        ];
    }
}
