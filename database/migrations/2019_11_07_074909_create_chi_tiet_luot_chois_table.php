<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_luot_choi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('luot_choi_id');
            $table->unsignedBigInteger('cau_hoi_id');
            $table->string('phuong_an');
            $table->bigInteger('diem');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cau_hoi_id')->references('id')->on('cau_hoi');
            $table->foreign('luot_choi_id')->references('id')->on('luot_choi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_luot_choi');
    }
}
