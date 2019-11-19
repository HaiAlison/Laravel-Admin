<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\Http\Requests\LinhVucRequest;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listLinhVuc=LinhVuc::all();
      return view('linh-vuc.danh-sach',compact('listLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //return về trang form trong folder lĩnh vực
        return view('linh-vuc.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinhVucRequest $request)
    {
        //
        $linhVuc=new LinhVuc;
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->route('linh-vuc.danh-sach');
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
        $linhVuc=LinhVuc::find($id);
        return view('linh-vuc.form',compact('linhVuc'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinhVucRequest $request, $id)
    {
        $LinhVuc=LinhVuc::find($id);
        $LinhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $LinhVuc->save();
        return redirect()->route('linh-vuc.danh-sach');
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
        $LinhVuc=LinhVuc::find($id);
        $LinhVuc->delete();
        return redirect()->route('linh-vuc.danh-sach');
         
    }
    public function restore($id)
    {
        $linhVuc=LinhVuc::find($id);
        $linhVuc->restore();
        return redirect()->route('linh-vuc.danh-sach');
    }
}
