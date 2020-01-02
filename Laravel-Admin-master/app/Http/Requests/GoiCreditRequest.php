<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoiCreditRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ten_goi'=>'required|unique:goi_credit,ten_goi|max:100',
            'credit'=>'required|numeric|integer',
            'so_tien'=>'required|numeric|integer'
        ];
    }
    public function messages()
    {
        return [
            'ten_goi.required'=>'Nhập tên gói vào con zai',
            'ten_goi.unique'=>'Tên gói đã tồn tại',
            'ten_goi.max'=>'Tên gói không quá 100 ký tự',
            'credit.required' => 'Số credit không được rỗng',
            'credit.numeric' => 'Số credit không được là ký tự',
            'credit.integer' => 'Số credit phải là số nguyên',
            'so_tien.required' => 'Số tiền không được rỗng',
            'so_tien.numeric' => 'Số tiền không được là ký tự',
            'so_tien.integer' => 'Số tiền phải là số nguyên',
        ];
    }
}
