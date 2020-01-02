<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['assign.guard:api','jwt.auth'])->group(function(){
	Route::get('linh-vuc','API\LinhVucController@layDanhSach');
	Route::get('cau-hoi','API\CauHoiController@layCauHoi');
	Route::get('bang-xep-hang','API\BangXepHangController@layDanhSach');
	Route::get('lay-thong-tin','API\DangNhapController@layThongTin');
	Route::get('lich-su-choi','API\LichSuChoiController@lichSuChoi');
	Route::get('goi-credit','API\DanhSachCreditController@goiCredit');
	Route::post('mua-credit','API\MuaCreditController@muaCredit');
	Route::put('cap-nhat-tai-khoan','API\CapNhatTaiKhoanController@capNhat');
	Route::post('luu-luot-choi','API\LuuLuotChoiController@luuLuotChoi');
});


Route::post('dang-nhap','API\DangNhapController@dangNhap');
Route::post('quen-mat-khau','API\SendMailController@send');
Route::post('dang-ky','API\DangKyController@dangKy');