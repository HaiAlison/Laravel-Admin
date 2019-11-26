<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHinhDiemCauHoiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'thu_tu'=>'required|unique:cau_hinh_diem_cau_hoi,thu_tu|numeric',
            'diem'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'thu_tu.required' => 'Thứ tự không được rỗng',
            'thu_tu.unique' => 'Thứ tự đã tồn tại',
            'thu_tu.numeric' => 'Thứ tự phải là ký số ',
            'diem.required' => 'Điểm không được rỗng',
            'diem.numeric' => 'Điểm phải là ký số'
        ];
    }
}