<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLuotChoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luot_choi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nguoi_choi_id');
            $table->integer('so_cau');
            $table->bigInteger('diem');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('nguoi_choi_id')->references('id')->on('nguoi_choi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luot_choi');
    }
}
