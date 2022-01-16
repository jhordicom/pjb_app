<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisisTable extends Migration
{
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_divisi');
            $table->string('nama_pegawai');
            $table->string('jabatan');
            $table->string('email');
            $table->string('NID');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('divisi');
    }
}
