<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\NguoiChoi;
use Illuminate\Support\Facades\Hash;
class SendMailController extends Controller
{
    //
		public function send(Request $request)
		    {
		    	$emailUser = $request->email;
		    	$username = $request->ten_dang_nhap;

		    	$randPassword = Str::random(8);
		    	$nguoiChoi = NguoiChoi::where([['email',$emailUser],['ten_dang_nhap',$username]])->first();
				
				if($nguoiChoi!=null)
				{	
					$nguoiChoi->ten_dang_nhap;
			    	$nguoiChoi->mat_khau = $randPassword;
			    	Mail::to($emailUser)->send(new SendMail($nguoiChoi));
			    	$nguoiChoi->mat_khau = Hash::make($randPassword);
			    	$nguoiChoi->save();
			    	return response()->json([
			    		'status'=>true,
			    		'message' => 'Mật khẩu mới đã được gửi đến email:'.$emailUser
			    	],200);
			    }
			    return response()->json([
			    		'status'=> false,
			    		'message' => 'Xử lý không thành công'
			    	],401);

		    }

}
