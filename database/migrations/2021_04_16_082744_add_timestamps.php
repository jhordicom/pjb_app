<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestamps extends Migration
{
    public function up()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::table('sertifikasis', function (Blueprint $table) {
            $table->dropColumn('timestamps');
        });
    }
}
