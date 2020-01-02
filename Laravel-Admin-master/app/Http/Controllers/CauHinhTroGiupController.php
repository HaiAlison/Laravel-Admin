<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhTroGiup;
class CauHinhTroGiupController extends Controller
{
    public function index()
    {
        $listCauHinh = CauHinhTroGiup::all();
        return view('cauhinh-trogiup.danh-sach', compact('listCauHinh'));
    }

    public function create()
    {
        return view('cauhinh-trogiup.form');
    }

    public function store(Request $request)
    {
        $cauHinh = new CauHinhTroGiup;
        $cauHinh->loai_tro_giup = $request->loai_tro_giup;
        $cauHinh->thu_tu = $request->thu_tu;
        $cauHinh->credit = $request->credit;
        $cauHinh->save();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with('thongbao','Thêm mới cấu hình thành công');
    }
    public function edit($id)
    {
        $cauHinh = CauHinhTroGiup::find($id);
        return view('cauhinh-trogiup.form',compact('cauHinh'));
    }
    public function update(Request $request, $id)
    {
        $cauHinh = CauHinhTroGiup::find($id);
        $cauHinh->loai_tro_giup = $request->loai_tro_giup;
        $cauHinh->thu_tu = $request->thu_tu;
        $cauHinh->credit = $request->credit;
        $cauHinh->save();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with('thongbao','Cập nhật cấu hình thành công');
    }
    public function destroy($id)
    {
        $cauHinh = CauHinhTroGiup::find($id);
        $cauHinh->delete();

        return redirect()->route('cau-hinh-tro-giup.danh-sach')->with('thongbao','Xóa cấu hình thành công');
    }
}