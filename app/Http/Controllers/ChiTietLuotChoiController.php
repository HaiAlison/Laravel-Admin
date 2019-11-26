<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LuotChoi;
use App\CauHoi;
use App\ChiTietLuotChoi;
class ChiTietLuotChoiController extends Controller
{
    public function index()
    {
        $listChiTietLuotChoi = ChiTietLuotChoi::all();
        $listLuotChoi = LuotChoi::all();
        $listCauHoi = CauHoi::all();
        return view('chi-tiet-luot-choi.ds-chi-tiet-luot-choi', compact('listChiTietLuotChoi','listLuotChoi','listCauHoi'));
    }

}
