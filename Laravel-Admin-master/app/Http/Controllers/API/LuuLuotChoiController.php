<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LuuLuotChoiController extends Controller
{
    //
    public function luuLuotChoi(Request $request)
    {

    	if(auth('api')->user() !=null){
    	$nguoiChoi = auth('api')->user();
    	$nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
    	$nguoiChoi->credit = $request->credit;
    	$nguoiChoi->save();
    	return response()->json([
    		'status' => true,
    		'message' => 'Lưu thành công'
    	],200);
		}
		return response()->json([
			'status' => false,
			'message' => 'Chưa đăng nhập hoặc token sai.'
		],401);
    }
}
