<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitTable extends Migration
{
    public function up()
    {
        Schema::create('unit', function (Blueprint $table) {

            $table->id('id_unit');
            $table->string('nama_unit');
            $table->string('lokasi_unit');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('unit');
    }
}
