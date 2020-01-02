<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichSuMuaCredit;
use App\NguoiChoi;
use App\GoiCredit;
class LichSuMuaCreditController extends Controller
{
    public function index()
    {
        $listLichSuMuaCredit = LichSuMuaCredit::all();
        $listNguoiChoi = NguoiChoi::all();
        $listGoiCredit = GoiCredit::all();
        return view('lich-su-mua-credit.ds-lich-su-mua-credit', compact('listLichSuMuaCredit','listNguoiChoi','listGoiCredit'));
    }
}
