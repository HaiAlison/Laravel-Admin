<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCauHoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cau_hoi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('noi_dung');
            $table->unsignedInteger('linh_vuc_id');
            $table->text('phuong_an_a');
            $table->text('phuong_an_b');
            $table->text('phuong_an_c');
            $table->text('phuong_an_d');
            $table->string('dap_an');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('linh_vuc_id')->references('id')->on('linh_vuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cau_hoi');
    }
}
