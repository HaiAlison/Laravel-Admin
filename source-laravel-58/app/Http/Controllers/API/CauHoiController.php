<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use  Illuminate\Support\Facades\Auth;
class CauHoiController extends Controller
{
    //
    public function layCauHoi(Request $request){
    	$linhVucID= $request->query('linh_vuc');

    	$listCauHoi=CauHoi::where('linh_vuc_id',$linhVucID)->get()->random(4);

    	$result=[
    		'success' =>true,
    		'data'=> $listCauHoi
    	];
    	return response()->json($result);

    }
}
