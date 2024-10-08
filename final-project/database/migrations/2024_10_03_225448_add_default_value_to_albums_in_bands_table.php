<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultValueToAlbumsInBandsTable extends Migration
{
    public function up()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->integer('albums')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->integer('albums')->default(null)->change();
        });
    }
};
