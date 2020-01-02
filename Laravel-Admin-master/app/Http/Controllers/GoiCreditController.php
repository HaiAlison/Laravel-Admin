<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
use App\Http\Requests\GoiCreditRequest;
use App\Http\Requests\UpdateGoiCreditRequest;
class GoiCreditController extends Controller
{
    public function index()
    {
        $listGoiCredit = GoiCredit::all();
        return view('goi-credit.ds-goi-credit', compact('listGoiCredit'));
    }

    public function create()
    {
        return view('goi-credit.form');
    }

    public function store(GoiCreditRequest $request)
    {
        $goiCredit = new GoiCredit;
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi-credit.danh-sach')->with('thongbao','Thêm mới gói credit thành công');;
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $goiCredit = GoiCredit::find($id);
        return view('goi-credit.form',compact('goiCredit'));
    }

    public function update(UpdateGoiCreditRequest $request, $id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->ten_goi = $request->ten_goi;
        $goiCredit->credit = $request->credit;
        $goiCredit->so_tien = $request->so_tien;
        $goiCredit->save();
        return redirect()->route('goi-credit.danh-sach')->with('thongbao','Cập nhật gói credit thành công');
    }
    public function destroy($id)
    {
        $goiCredit = GoiCredit::find($id);
        $goiCredit->delete();

        return redirect()->route('goi-credit.danh-sach')->with('thongbao','Xóa gói credit thành công');
    }
    public function showDeleted(){
        $listGoiCreditRestore = GoiCredit::onlyTrashed()->get();
        return view('goi-credit.ds-goi-credit', compact('listGoiCreditRestore'));
    }
    
    public function reStore($id){
        GoiCredit::withTrashed()->find($id)->restore();
        return redirect()->route('goi-credit.danh-sach')->with('thongbao','Khôi phục gói credit viên thành công');
    }
}
