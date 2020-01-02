<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoiCredit;
class MuaCreditController extends Controller
{
    //
    public function muaCredit(Request $request)
    {
    	$credits = GoiCredit::where('id',$request->id)->first();
    	$soCredit = $credits->credit;
    	if(auth('api')->user() !=null){
    	$nguoiChoi = auth('api')->user();
    	$nguoiChoi->credit = $nguoiChoi->credit + $soCredit;
    	$nguoiChoi->save();
    	return response()->json([
    		'status' => true,
    		'message' => 'Mua credit thành công',
    		'data' => $soCredit,
    		'tổng credit' => $nguoiChoi->credit
    	],200);
		}
		return response()->json([
			'status' => false,
			'message' => 'Chưa đăng nhập hoặc token sai.'
		],401);
    }
}
