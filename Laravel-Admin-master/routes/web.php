<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::prefix('linh-vuc')->group(function(){
//     Route::name('linh-vuc.')->group(function(){
//         Route::get('/', function () {
//             return view('ds-linh-vuc');
//         })->name('danh-sach');
        
//         Route::get('/them-moi', function () {
//             return view('them-moi-linh-vuc');
//         })->name('them-moi');
//     });
// });

Route::get('test','QuanTriVienController@layThongTin');

Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap')->middleware('guest');
Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('layout');
    })->name('dashboard');
    // LinhVuc
    Route::prefix('linh-vuc')->group(function(){
        Route::name('linh-vuc.')->group(function(){ 
            Route::get('/', 'LinhVucController@index')->name('danh-sach');
            Route::get('them-moi', 'LinhVucController@create')->name('them-moi');
            Route::post('them-moi', 'LinhVucController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'LinhVucController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'LinhVucController@destroy')->name('xoa');
            Route::get('restore', 'LinhVucController@showDeleted')->name('restore');
            Route::get('restore/{id}', 'LinhVucController@reStore')->name('xu-ly-restore');
        });
    });

//CauHoi
    Route::prefix('cau-hoi')->group(function(){
        Route::name('cau-hoi.')->group(function(){ 
            Route::get('/', 'CauHoiController@index')->name('danh-sach');
            Route::get('them-moi', 'CauHoiController@create')->name('them-moi');
            Route::post('them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'CauHoiController@destroy')->name('xoa');
            Route::get('restore', 'CauHoiController@showDeleted')->name('restore');
            Route::get('restore/{id}', 'CauHoiController@reStore')->name('xu-ly-restore');
        });
    });
    //NguoiChoi
    Route::prefix('nguoi-choi')->group(function(){
        Route::name('nguoi-choi.')->group(function(){ 
            Route::get('/', 'NguoiChoiController@index')->name('danh-sach');
            Route::get('them-moi', 'NguoiChoiController@create')->name('them-moi');
            Route::post('them-moi', 'NguoiChoiController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}','NguoiChoiController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'NguoiChoiController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'NguoiChoiController@destroy')->name('xoa');
            Route::get('restore', 'NguoiChoiController@showDeleted')->name('restore');
            Route::get('restore/{id}', 'NguoiChoiController@reStore')->name('xu-ly-restore');
        });
    });
    //LuotChoi
    Route::prefix('luot-choi')->group(function(){
        Route::name('luot-choi.')->group(function(){ 
            Route::get('/', 'LuotChoiController@index')->name('danh-sach');
            Route::get('cap-nhat/{id}','LuotChoiController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}','LuotChoiController@update')->name('xu-ly-cap-nhat');   
        });
    });
    //ChiTietLuotChoi
    Route::prefix('chi-tiet-luot-choi')->group(function(){
        Route::name('chi-tiet-luot-choi.')->group(function(){ 
            Route::get('/', 'ChiTietLuotChoiController@index')->name('danh-sach');
        });
    });
    //Goi Credit
    Route::prefix('goi-credit')->group(function(){
        Route::name('goi-credit.')->group(function(){ 
            Route::get('/', 'GoiCreditController@index')->name('danh-sach');
            Route::get('them-moi', 'GoiCreditController@create')->name('them-moi');
            Route::post('them-moi', 'GoiCreditController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'GoiCreditController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'GoiCreditController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'GoiCreditController@destroy')->name('xoa');
            Route::get('restore', 'GoiCreditController@showDeleted')->name('restore');
            Route::get('restore/{id}', 'GoiCreditController@reStore')->name('xu-ly-restore');
        });
    });
    //Lich Su Mua Credit
    Route::prefix('lich-su-mua-credit')->group(function(){
        Route::name('lich-su-mua-credit.')->group(function(){ 
            Route::get('/', 'LichSuMuaCreditController@index')->name('danh-sach');
        });
    });
    // Demo
    Route::prefix('demo')->group(function(){
        Route::name('demo.')->group(function(){ 
            Route::get('/', 'DemoController@index')->name('danh-sach');
            Route::get('them-moi', 'DemoController@create')->name('them-moi');
            Route::post('them-moi', 'DemoController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'DemoController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'DemoController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'DemoController@destroy')->name('xoa');
        });
    });
    //CauHinhDiemCauHoi
    Route::prefix('cau-hinh-diem-cau-hoi')->group(function(){
        Route::name('cau-hinh-diem-cau-hoi.')->group(function(){ 
            Route::get('/', 'CauHinhDiemCauHoiController@index')->name('danh-sach');
            Route::get('them-moi', 'CauHinhDiemCauHoiController@create')->name('them-moi');
            Route::post('them-moi', 'CauHinhDiemCauHoiController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'CauHinhDiemCauHoiController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'CauHinhDiemCauHoiController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'CauHinhDiemCauHoiController@destroy')->name('xoa');
        });
    });
    //CauHinhApp
    Route::prefix('cau-hinh-app')->group(function(){
        Route::name('cau-hinh-app.')->group(function(){ 
            Route::get('/', 'CauHinhDiemAppController@index')->name('danh-sach');
            Route::get('them-moi', 'CauHinhDiemAppController@create')->name('them-moi');
            Route::post('them-moi', 'CauHinhDiemAppController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'CauHinhDiemAppController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'CauHinhDiemAppController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'CauHinhDiemAppController@destroy')->name('xoa');
        });
    });
    //CauHinhApp
    Route::prefix('cau-hinh-app')->group(function(){
        Route::name('cau-hinh-app.')->group(function(){ 
            Route::get('/', 'CauHinhAppController@index')->name('danh-sach');
            Route::get('them-moi', 'CauHinhAppController@create')->name('them-moi');
            Route::post('them-moi', 'CauHinhAppController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'CauHinhAppController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'CauHinhAppController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'CauHinhAppController@destroy')->name('xoa');
        });
    });
    //CauHinhTroGiup
    Route::prefix('cau-hinh-tro-giup')->group(function(){
        Route::name('cau-hinh-tro-giup.')->group(function(){ 
            Route::get('/', 'CauHinhTroGiupController@index')->name('danh-sach');
            Route::get('them-moi', 'CauHinhTroGiupController@create')->name('them-moi');
            Route::post('them-moi', 'CauHinhTroGiupController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'CauHinhTroGiupController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'CauHinhTroGiupController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'CauHinhTroGiupController@destroy')->name('xoa');
        });
    });
    //QuanTriVien
    Route::prefix('quan-tri-vien')->group(function(){
        Route::name('quan-tri-vien.')->group(function(){ 
            Route::get('/', 'QuanTriVienController@index')->name('danh-sach');
            Route::get('them-moi', 'QuanTriVienController@create')->name('them-moi');
            Route::post('them-moi', 'QuanTriVienController@store')->name('xu-ly-them-moi');
            Route::get('cap-nhat/{id}', 'QuanTriVienController@edit')->name('cap-nhat');
            Route::post('cap-nhat/{id}', 'QuanTriVienController@update')->name('xu-ly-cap-nhat');   
            Route::get('xoa/{id}', 'QuanTriVienController@destroy')->name('xoa');
            Route::get('xoa-session', 'QuanTriVienController@xoaSession')->name('xoa-session');
            Route::get('doi-mat-khau', 'QuanTriVienController@showMatKhau')->name('doi-mat-khau');
            Route::post('doi-mat-khau/{id}', 'QuanTriVienController@doiMatKhau')->name('xu-ly-doi-mat-khau');
            Route::get('restore', 'QuanTriVienController@showDeleted')->name('restore');
            Route::get('restore/{id}', 'QuanTriVienController@reStore')->name('xu-ly-restore');
            Route::get('xoa-hoan-toan/{id}', 'QuanTriVienController@forceDelete')->name('xu-ly-xoa-hoan-toan');
        });
    });
    //XoaSession
});
