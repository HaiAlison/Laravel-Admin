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
        $data = [
            [
                'ten_dang_nhap' => 'vanchien',
                'mat_khau' => bcrypt('12345'),
                'ho_ten' =>'chien',
            ],
        ];
        DB::table('quan_tri_vien')->insert($data);
    }
}
