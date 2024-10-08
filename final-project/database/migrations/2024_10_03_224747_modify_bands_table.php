<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyBandsTable extends Migration
{
    public function up()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->integer('albums')->nullable()->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('bands', function (Blueprint $table) {
            $table->integer('albums')->default(0)->change();
        });
    }
}

