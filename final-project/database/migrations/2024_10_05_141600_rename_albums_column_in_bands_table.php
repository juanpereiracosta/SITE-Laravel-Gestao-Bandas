<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('bands', function (Blueprint $table) {
            $table->renameColumn('albums', 'album_count');
        });
    }

    public function down(): void {
        Schema::table('bands', function (Blueprint $table) {
            $table->renameColumn('album_count', 'albums');
        });
    }
};
