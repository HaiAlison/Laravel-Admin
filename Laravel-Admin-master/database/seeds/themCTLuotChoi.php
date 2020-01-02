<?php

use Illuminate\Database\Seeder;

class themCTLuotChoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $count = 1;
        while($count < 30) {
			echo "Them nguoi choi " . $count . "\n";
        	$tenDangNhap = Str::random(8);
        	App\NguoiChoi::create([
        		'luot_choi_id' => rand(1,5),
        		'cau_hoi_id'		=> rand(1,5),
        		'phuong_an'			=> substr(str_shuffle(str_repeat("ABCD", 4)), 0, 4),
        		'diem'	=> rand(10, 500)
        	]);
        	$count++;
        }
    }
}
