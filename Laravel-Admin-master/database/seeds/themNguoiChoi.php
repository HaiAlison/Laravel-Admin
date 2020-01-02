<?php

use Illuminate\Database\Seeder;

class themNguoiChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\NguoiChoi::create([
        	'ten_dang_nhap' => 'anhnene1',
    		'mat_khau'		=> Hash::make('anhnene1'),
    		'email'			=> 'maithanhhai9x@gmail.com',
    		'hinh_dai_dien'	=>  'maihai.jpg',
    		'diem_cao_nhat'	=> rand(1000, 5000),
    		'credit'		=> rand(10, 500)
        ]);
    }
}
