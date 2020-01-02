<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\QuanTriVienRequest;
use App\Http\Requests\UpdateQuanTriVienRequest;
use App\Http\Requests\DoiMatKhauRequest;
use App\Http\Requests\LogInRequest;
class QuanTriVienController extends Controller
{
    protected $redirectTo ="linh-vuc";
    public function index()
    {
        $listQuanTriVien = QuanTriVien::all();
        return view('quan-tri-vien.ds-quan-tri-vien', compact('listQuanTriVien'));
    }
    public function create()
    {
        return view('quan-tri-vien.form');
    }
    public function store(QuanTriVienRequest $request)
    {
        $quanTriVien = new QuanTriVien;
        $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        $quanTriVien->mat_khau = bcrypt($request->mat_khau);
        $quanTriVien->ho_ten = $request->ho_ten;
        if($request->hasFile('anh_dai_dien'))
        {
            $file = $request->file('anh_dai_dien');

            $name  = $file->getClientOriginalName();
            $anh_dai_dien = Str::random(4)."_".$name;
            while(file_exists("assets/images/quan-tri-vien/".$anh_dai_dien))
            {
                $anh_dai_dien = Str::random(4)."_".$name;
            }
            $file->move("assets/images/quan-tri-vien/",$anh_dai_dien);
            $quanTriVien->anh_dai_dien = $anh_dai_dien;
        }
        else
        {
            $quanTriVien->anh_dai_dien = "";
        }
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Thêm mới quản trị viên thành công');
    }
    public function showMatKhau()
    {
        return view('quan-tri-vien.doi-pwd');
    }
    public function doiMatKhau(DoiMatKhauRequest $request, $id)
    {
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->mat_khau = bcrypt($request->mat_khau);
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Đổi mật khẩu thành công');
    }
    public function edit($id)
    {
        $quanTriVien = QuanTriVien::find($id);
        return view('quan-tri-vien.form',compact('quanTriVien'));
    }
    public function update(UpdateQuanTriVienRequest $request, $id)
    {
        $quanTriVien = QuanTriVien::find($id);
        // $quanTriVien->ten_dang_nhap = $request->ten_dang_nhap;
        // $quanTriVien->mat_khau = bcrypt($request->mat_khau);
        $quanTriVien->ho_ten = $request->ho_ten;
        if($request->hasFile('anh_dai_dien'))
        {
            $file = $request->file('anh_dai_dien');

            $name  = $file->getClientOriginalName();
            $anh_dai_dien = Str::random(4)."_".$name;
            while(file_exists("assets/images/quan-tri-vien/".$anh_dai_dien))
            {
                $anh_dai_dien = Str::random(4)."_".$name;
            }
            $file->move("assets/images/quan-tri-vien/",$anh_dai_dien);
            $quanTriVien->anh_dai_dien = $anh_dai_dien;
        }
        else
        {
            $quanTriVien->anh_dai_dien = "";
        }
        $quanTriVien->save();

        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Cập nhật quản trị viên thành công');
    }
    public function destroy($id)
    {
        $quanTriVien = QuanTriVien::find($id);
        $quanTriVien->delete();

        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Xóa quản trị viên thành công');
    }

    public function dangNhap(){
        return view('login');
    }
    public function xuLyDangNhap(LogInRequest $request)
    {
        // $request->validate([
        //     'ten_dang_nhap'=>'required|email',
        //     'mat_khau'=>'required|min:4|max:32',
        // ],[
        //     'ten_dang_nhap.required'=>'Bạn chưa nhập Email',
        //     'ten_dang_nhap.email'=> 'Email chưa đúng định dạng',
        //     'mat_khau.required' => 'Bạn chưa nhập Password',
        //     'mat_khau.min' => 'Password phải ít nhất 4 ký tự',
        //     'mat_khau.max' => 'Password không quá 32 ký tự'
        // ]);
    
        // $arr = [
        //     'ten_dang_nhap' => $request->ten_dang_nhap,
        //     'password' => $request->mat_khau
        // ];
     
        
        // if (Auth::guard('quan_tri_vien')->attempt($arr)) {

        //     return redirect()->route('dashboard');
            
        //     //..code tùy chọn
        //     //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        // } else {

        //     return  redirect()->route('get-login')->with('thongbao','Đăng nhập thất bại');
           
        //     //...code tùy chọn
        //     //đăng nhập thất bại hiển thị đăng nhập thất bại
        // }
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;
        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap,'password'=>$mat_khau]))
        {
            return redirect()->route('dashboard');
        }
        return redirect()->route('dang-nhap')->with('thongbao','Tên đăng nhập hoặc mật khẩu không hợp lệ');
        // $qtv = QuanTriVien::where('ten_dang_nhap',$ten_dang_nhap)->first();
        // if($qtv == null)
        // {
        //     return "Sai ten dang nhap";
        // }
        // if(!Hash::check($mat_khau,$qtv->mat_khau)){
        //     return "Sai mat khau";
        // }
        
    }
    public function layThongTin(){
        return Auth::user();
    }
    public function dangXuat(){
        Auth::logout();
        return redirect()->route('dang-nhap');
    }
    public function xoaSession(Request $request){
        $request->session()->forget('thong_bao');
        return redirect()->route('dashboard');
    }

    public function showDeleted(){
        $listQuanTriVienRestore = QuanTriVien::onlyTrashed()->get();
        return view('quan-tri-vien.ds-quan-tri-vien', compact('listQuanTriVienRestore'));
    }
    
    public function reStore($id){
        $listQuanTriVienRestore=QuanTriVien::withTrashed()->find($id);
        $listQuanTriVienRestore->restore();
        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Khôi phục quản trị viên thành công');
    }

    public function forceDelete($id){
        QuanTriVien::withTrashed()->find($id)->forceDelete();
        return redirect()->route('quan-tri-vien.danh-sach')->with('thongbao','Xóa vĩnh viễn quản trị viên thành công');;
    }
}
