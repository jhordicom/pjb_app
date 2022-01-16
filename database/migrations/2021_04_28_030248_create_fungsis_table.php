<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFungsisTable extends Migration
{
    public function up()
    {
        Schema::create('fungsi', function (Blueprint $table) {
            $table->id('id_fungsi');
            $table->string('nama_fungsi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fungsi');
    }
}
