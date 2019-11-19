<?php

use Illuminate\Database\Seeder;

class ThemQuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\QuanTriVien::create([
        	'ten_dang_nhap' => 'admin',
        	'mat_khau' => Hash::make('1234'),
        	'ho_ten' => 'Thanh Hải'
        	]);
    }
}
