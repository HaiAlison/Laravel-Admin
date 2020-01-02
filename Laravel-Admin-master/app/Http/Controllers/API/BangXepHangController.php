<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
class BangXepHangController extends Controller
{
    public function layDanhSach(Request $request) {
    	$page = $request->query('page', 1);
    	$limit = $request->query('limit', 25);

    	$listNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat', 'desc')->skip(($page - 1) * $limit)->take($limit)->get();

    	return response()->json([
    		 'total'	=> NguoiChoi::count(),
    		'success' => true,
    		'message' => 'Bảng xếp hạng:',
    		'data'	=> $listNguoiChoi
    	]);
    }
}
