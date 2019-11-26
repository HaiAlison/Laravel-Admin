<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhDiemCauHoi;
use App\Http\Requests\CauHinhDiemCauHoiRequest;
use App\Http\Requests\UpdateCauHinhDiemCauHoiRequest;
class CauHinhDiemCauHoiController extends Controller
{
  
    public function index()
    {
        $listCauHinh = CauHinhDiemCauHoi::all();
        return view('cauhinh-diemcauhoi.danh-sach', compact('listCauHinh'));
    }

    public function create()
    {
        return view('cauhinh-diemcauhoi.form');
    }

    public function store(CauHinhDiemCauHoiRequest $request)
    {
        $cauHinh = new CauHinhDiemCauHoi;
        $cauHinh->thu_tu = $request->thu_tu;
        $cauHinh->diem = $request->diem;
        $cauHinh->save();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with('thongbao','Thêm mới cấu hình thành công');
    }
    public function edit($id)
    {
        $cauHinh = CauHinhDiemCauHoi::find($id);
        return view('cauhinh-diemcauhoi.form',compact('cauHinh'));
    }
    public function update(UpdateCauHinhDiemCauHoiRequest $request, $id)
    {
        $cauHinh = CauHinhDiemCauHoi::find($id);
        $cauHinh->thu_tu = $request->thu_tu;
        $cauHinh->diem = $request->diem;
        $cauHinh->save();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with('thongbao','Cập nhật cấu hình thành công');
    }
    public function destroy($id)
    {
        $cauHinh = CauHinhDiemCauHoi::find($id);
        $cauHinh->delete();

        return redirect()->route('cau-hinh-diem-cau-hoi.danh-sach')->with('thongbao','Xóa cấu hình thành công');
    }
}