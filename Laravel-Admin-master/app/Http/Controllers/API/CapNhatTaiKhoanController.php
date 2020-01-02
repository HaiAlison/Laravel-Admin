<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;
class CapNhatTaiKhoanController extends Controller
{
    //

    public function capNhat(Request $request)
    {
    	
    	if(auth('api')->user() !=null){

  			$nguoiChoi = NguoiChoi::where('id',auth('api')->user()->id)->first();
  			if($nguoiChoi!=null){
    		$nguoiChoi->email = $request->email;
    		$nguoiChoi->mat_khau = Hash::make($request->mat_khau);
    		$nguoiChoi->hinh_dai_dien = $request->hinh_dai_dien;
    		$nguoiChoi->save();

    		$credentials = [
    	 	'ten_dang_nhap' => $nguoiChoi->ten_dang_nhap,
    	 	'password' => $request->mat_khau
			];
			$token = auth('api')->attempt($credentials);
    		return response()->json([
    			'success' => true,
    			'message' => 'Cập nhật thành công',
    			'token' => $token
    		],200);
    		}
    	}
    	return response()->json([
    			'success' => false,
    			'message' => 'Cập nhật thất bại'
    		],401);
	}
}
