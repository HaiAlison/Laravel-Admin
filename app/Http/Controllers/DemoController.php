<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
class DemoController extends Controller
{
    public function index()
    {
        
        $listCauHoi = CauHoi::all();
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.ds-cau-hoi', compact('listCauHoi','listLinhVuc'));
    }

    public function create()
    {
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.form',compact('listLinhVuc'));
    }

    public function store(Request $request)
    {
        $cauHoi = new CauHoi;
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an ;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach')->with('thongbao','Thêm mới câu hỏi thành công');;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cauHoi = CauHoi::find($id);
        $listLinhVuc = LinhVuc::all();
        return view('cau-hoi.form',compact('cauHoi','listLinhVuc'));
    }

    public function update(Request $request, $id)
    {
        $cauHoi = CauHoi::find($id);
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an ;
        $cauHoi->save();

        return redirect()->route('cau-hoi.danh-sach')->with('thongbao','Cập nhật câu hỏi thành công');
    }

    public function destroy($id)
    {
        $cauHoi = CauHoi::find($id);
        $cauHoi->delete();

        return redirect()->route('cau-hoi.danh-sach')->with('thongbao','Xóa câu hỏi thành công');
    }
}
