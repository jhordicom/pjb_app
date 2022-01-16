<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikasipegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikasipegawai', function (Blueprint $table) {
            $table->id('sertifikasipegawai_id');
            $table->string('NID', 255);
            $table->bigInteger('sertifikasi_id')->unsigned();
            $table->bigInteger('pelatihan_id')->unsigned();
            $table->bigInteger('work_id')->unsigned();
            $table->timestamps();


            $table->foreign('NID')->references('NID')->on('users');
            $table->foreign('sertifikasi_id')->references('id')->on('sertifikasis');
            $table->foreign('pelatihan_id')->references('id_pelatihan')->on('pelatihan');
            $table->foreign('work_id')->references('id_work')->on('workshop');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikasipegawai');
    }
}
