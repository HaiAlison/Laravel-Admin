<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DangNhapController extends Controller
{
    //
    public function dangNhap(Request $request)
    {
    	
    	$credentials = [
    	 	'ten_dang_nhap' => $request->ten_dang_nhap,
    	 	'password' => $request->mat_khau
		];

		if(!$token = auth('api')->attempt($credentials)){
			return response()->json([
				'status'=> false,
				'message' => 'Đăng nhập không thành công'
			],401);
		}
		return response()->json([
			'status' => true,
			'message' => 'Đăng nhập thành công',
			'token' => $token
		],200);

    }
   
   public function layThongTin()
   {
   	return auth('api')->user();
   }
}
