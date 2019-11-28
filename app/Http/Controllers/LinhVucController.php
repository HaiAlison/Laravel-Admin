<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\Http\Requests\LinhVucRequest;
use App\Http\Requests\UpdateLinhVucRequest;
class LinhVucController extends Controller
{
    public function index()
    {
        $listLinhVuc = LinhVuc::all();
        return view('linh-vuc.ds-linh-vuc', compact('listLinhVuc'));
    }
    public function create()
    {
        return view('linh-vuc.them-moi-linh-vuc');
    }
    public function store(LinhVucRequest $request)
    {
        $linhVuc = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->route('linh-vuc.danh-sach')->with('thongbao','Thêm mới lĩnh vực thành công');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $linhVuc = LinhVuc::find($id);
        return view('linh-vuc.them-moi-linh-vuc',compact('linhVuc'));
    }
    public function update(UpdateLinhVucRequest $request, $id)
    {
        $linhVuc = LinhVuc::find($id);
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->route('linh-vuc.danh-sach')->with('thongbao','Cập nhật lĩnh vực thành công');
    }
    public function destroy($id)
    {
        $linhVuc = LinhVuc::find($id);
        $linhVuc->delete();

        return redirect()->route('linh-vuc.danh-sach')->with('thongbao','Xóa lĩnh vực thành công');
    }
    public function showDeleted(){
        $listLinhVucRestore = LinhVuc::onlyTrashed()->get();
        return view('linh-vuc.ds-linh-vuc', compact('listLinhVucRestore'));
    }
    
    public function reStore($id){
        LinhVuc::withTrashed()->find($id)->restore();
        return redirect()->route('linh-vuc.danh-sach')->with('thongbao','Khôi phục lĩnh vực thành công');
    }
}
