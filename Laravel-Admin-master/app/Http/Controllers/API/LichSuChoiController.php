<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChiTietLuotChoi;
class LichSuChoiController extends Controller
{
    //
    public function lichSuChoi(Request $request)
    {
    	$page = $request->query('page',1);
    	$limit = $request->query('limit',15);
    	$listLichSu = ChiTietLuotChoi::all()->skip(($page - 1) * $limit)->take($limit);
    	return response()->json([
    		'success' => true,
    		'message' => 'lịch sử người chơi',
    		'data' => $listLichSu
    	],200);

    }
}
