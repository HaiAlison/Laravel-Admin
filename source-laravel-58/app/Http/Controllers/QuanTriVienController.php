<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Facades\Auth;
class QuanTriVienController extends Controller
{
    //
    public function dangNhap()
    {
    	return view('dang-nhap');

    }
    public function index()
    {
        $listQuanTriVien = QuanTriVien::all();
        return view ('quan-tri-vien.danh-sach',compact('listQuanTriVien'));
    }

    public function xulyDangNhap(Request $request)
    {
    	$ten_dang_nhap=$request->ten_dang_nhap;
    	$mat_khau = $request->mat_khau;
    	
    	if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap,'password' => $mat_khau]))
    	{
    		return redirect()->route('trang-chu');
    	}
        return redirect()->route('dang-nhap')->with('thongbao','Tên đăng nhập hoặc mật khẩu sai');
    
        //$qtv = QuanTriVien::where('ten_dang_nhap',$ten_dang_nhap)->first();
    	// if($qtv==null)
    	// {
    	// 	return 'sai tên tài khoản';
    	// }
    	// if(!Hash::check($mat_khau, $qtv->mat_khau))
    	// {
    	// 	return "Sai mật khẩu";
    	// }
    	// return "Đăng nhập thành công";

    }

    public function layThongTin()
    {
        $ten = Auth::ho_ten();
        return Auth::user();

    }
    public function dangXuat()
    {
         Auth::logout();
         return redirect()->route('dang-nhap');

    }
}
