<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listCauHoi=CauHoi::all();
      return view('cau-hoi.danh-sach',compact('listCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLinhVuc=LinhVuc::all();

        return view('cau-hoi.form',compact('listLinhVuc'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $cauHoi=new CauHoi;
        $cauHoi->noi_dung=$request->noi_dung;
        $cauHoi->linh_vuc_id=$request->linh_vuc; //request id bên form
        $cauHoi->phuong_an_a=$request->phuong_an_a;
        $cauHoi->phuong_an_b=$request->phuong_an_b;
        $cauHoi->phuong_an_c=$request->phuong_an_c;
        $cauHoi->phuong_an_d=$request->phuong_an_d;
        $cauHoi->dap_an=$request->dap_an;
        $cauHoi->save();
        return redirect()->route('cau-hoi.danh-sach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $cauHoi=CauHoi::find($id);
        $listLinhVuc=LinhVuc::all();
        return view('cau-hoi.form',compact('cauHoi','listLinhVuc'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cauHoi=new CauHoi;
        $cauHoi->noi_dung=$request->noi_dung;
        $cauHoi->linh_vuc_id=$request->linh_vuc; //request id bên form
        $cauHoi->phuong_an_a=$request->phuong_an_a;
        $cauHoi->phuong_an_b=$request->phuong_an_b;
        $cauHoi->phuong_an_c=$request->phuong_an_c;
        $cauHoi->phuong_an_d=$request->phuong_an_d;
        $cauHoi->dap_an=$request->dap_an;
        $cauHoi->save();
        return redirect()->route('cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cauHoi=CauHoi::find($id);
        $cauHoi->delete();
        return redirect()->route('cau-hoi.danh-sach');
         
    }
}
