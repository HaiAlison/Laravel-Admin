<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class DangKyController extends Controller
{
    //
    public function dangKy(Request $request)
    {
    	
    	$user = NguoiChoi::where([['email',$request->email],['ten_dang_nhap',$request->ten_dang_nhap]])->first();
		if ($user === null) {
		$nguoiChoi = new NguoiChoi;
    	$nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
    	$nguoiChoi->mat_khau = Hash::make($request->mat_khau);
    	$nguoiChoi->email = $request->email;
    	$nguoiChoi->hinh_dai_dien = "avatar.jpg";
    	$nguoiChoi->diem_cao_nhat = 0;
    	$nguoiChoi->credit = 100;
    	$nguoiChoi->save();
    	return response()->json([
    		'status' => true,
    		'message' => 'Đăng ký thành công'
    	],200);
		}
		return response()->json([
			'status'=> false,
			'message' => 'Tên đăng nhập hoặc email đã tồn tại'
		],400);
    	


    }
}
