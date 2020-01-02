<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoiCredit;
class DanhSachCreditController extends Controller
{
    //
    public function goiCredit()
    {
    	$credits = GoiCredit::all();
    return response()->json([
    	'status'=>true,
    	'message' => 'Danh sách gói credit',
    	'data' => $credits
    ],200);
    }
}
