<?php

use Illuminate\Database\Seeder;

class themGoiCredit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         App\GoiCredit::create([
        	'ten_goi' => 'Gói 200',
    		'credit'		=> '200',
    		'so_tien'			=> '50'
    		
        ]);
    }
}
