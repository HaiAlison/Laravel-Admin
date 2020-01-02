<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuotChoi;
use App\NguoiChoi;
class LuotChoiController extends Controller
{
    public function index()
    {
        $listLuotChoi = LuotChoi::all();
        $listNguoiChoi = NguoiChoi::all();
        return view('luot-choi.ds-luot-choi', compact('listLuotChoi','listNguoiChoi'));
    }
    public function edit($id)
    {
        $luotChoi = LuotChoi::find($id);
        $listNguoiChoi = NguoiChoi::all();
        return view('luot-choi.form',compact('luotChoi','listNguoiChoi'));
    }
    public function update(Request $request, $id)
    {
        $luotChoi = LuotChoi::find($id);
        // $luotChoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotChoi->so_cau = $request->so_cau;
        $luotChoi->diem = $request->diem;
        $luotChoi->save();

        return redirect()->route('luot-choi.danh-sach')->with('thongbao','Cập nhật lượt chơi thành công');
    }
}
