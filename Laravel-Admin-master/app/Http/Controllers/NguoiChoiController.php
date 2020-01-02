<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\NguoiChoi;
use App\Http\Requests\NguoiChoiRequest;
use App\Http\Requests\UpdateNguoiChoiRequest;
class NguoiChoiController extends Controller
{
    public function index()
    {
        $listNguoiChoi = NguoiChoi::all();
        return view('nguoi-choi.ds-nguoi-choi', compact('listNguoiChoi'));
    }

    
    public function create()
    {
        return view('nguoi-choi.form');
    }

    public function store(NguoiChoiRequest $request)
    {
        $nguoiChoi = new NguoiChoi;
        $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        $nguoiChoi->mat_khau = bcrypt($request->mat_khau);
        $nguoiChoi->email = $request->email;
        // $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        // $nguoiChoi->credit = $request->credit;
        if($request->hasFile('hinh_dai_dien'))
        {
            $file = $request->file('hinh_dai_dien');

            $name  = $file->getClientOriginalName();
            $hinh_dai_dien = Str::random(4)."_".$name;
            while(file_exists("assets/images/nguoi-choi/".$hinh_dai_dien))
            {
                $hinh_dai_dien = Str::random(4)."_".$name;
            }
            $file->move("assets/images/nguoi-choi/",$hinh_dai_dien);
            $nguoiChoi->hinh_dai_dien = $hinh_dai_dien;
        }
        else
        {
            $nguoiChoi->hinh_dai_dien = "";
        }
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach')->with('thongbao','Thêm mới người chơi thành công');
    }

    public function edit($id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        return view('nguoi-choi.form',compact('nguoiChoi'));
    }

    public function update(UpdateNguoiChoiRequest $request, $id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        // $nguoiChoi->ten_dang_nhap = $request->ten_dang_nhap;
        // $nguoiChoi->mat_khau = bcrypt($request->mat_khau);
        $nguoiChoi->email = $request->email;
        // $nguoiChoi->diem_cao_nhat = $request->diem_cao_nhat;
        // $nguoiChoi->credit = $request->credit;
        if($request->hasFile('hinh_dai_dien'))
        {
            $file = $request->file('hinh_dai_dien');

            $name  = $file->getClientOriginalName();
            $hinh_dai_dien = Str::random(4)."_".$name;
            while(file_exists("assets/images/nguoi-choi/".$hinh_dai_dien))
            {
                $hinh_dai_dien = Str::random(4)."_".$name;
            }
            $file->move("assets/images/nguoi-choi/",$hinh_dai_dien);
            $nguoiChoi->hinh_dai_dien = $hinh_dai_dien;
        }
        else
        {
            $nguoiChoi->hinh_dai_dien = "";
        }
        $nguoiChoi->save();

        return redirect()->route('nguoi-choi.danh-sach')->with('thongbao','Cập nhật người chơi thành công');
    }

    
    public function destroy($id)
    {
        $nguoiChoi = NguoiChoi::find($id);
        $nguoiChoi->delete();

        return redirect()->route('nguoi-choi.danh-sach')->with('thongbao','Xóa người chơi thành công');
    }
    public function showDeleted(){
        $listNguoiChoiRestore = NguoiChoi::onlyTrashed()->get();
        return view('nguoi-choi.ds-nguoi-choi', compact('listNguoiChoiRestore'));
    }
    
    public function reStore($id){
        NguoiChoi::withTrashed()->find($id)->restore();
        return redirect()->route('nguoi-choi.danh-sach')->with('thongbao','Khôi phục người chơi thành công');
    }
}
