<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('NIP', 100);
            $table->string('Unit', 100);
            $table->string('Email', 100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
