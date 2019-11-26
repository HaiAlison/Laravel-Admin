<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhApp;
use App\Http\Requests\UpdateCauHinhAppRequest;
class CauHinhAppController extends Controller
{
    public function index()
    {
        $listCauHinh = CauHinhApp::all();
        return view('cauhinh-app.danh-sach', compact('listCauHinh'));
    }

    public function create()
    {
        return view('cauhinh-app.form');
    }

    public function store(Request $request)
    {
        $cauHinh = new CauHinhApp;
        $cauHinh->co_hoi_sai = $request->co_hoi_sai;
        $cauHinh->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinh->save();

        return redirect()->route('cau-hinh-app.danh-sach')->with('thongbao','Thêm mới cấu hình thành công');
    }
    public function edit($id)
    {
        $cauHinh = CauHinhApp::find($id);
        return view('cauhinh-app.form',compact('cauHinh'));
    }
    public function update(UpdateCauHinhAppRequest $request, $id)
    {
        $cauHinh = CauHinhApp::find($id);
        $cauHinh->co_hoi_sai = $request->co_hoi_sai;
        $cauHinh->thoi_gian_tra_loi = $request->thoi_gian_tra_loi;
        $cauHinh->save();

        return redirect()->route('cau-hinh-app.danh-sach')->with('thongbao','Cập nhật cấu hình thành công');
    }
    public function destroy($id)
    {
        $cauHinh = CauHinhApp::find($id);
        $cauHinh->delete();

        return redirect()->route('cau-hinh-app.danh-sach')->with('thongbao','Xóa cấu hình thành công');
    }
}