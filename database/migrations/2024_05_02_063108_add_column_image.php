<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tabel_point', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polylines', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polygons', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop column image untuk menghapus kolom image
        Schema::table('tabel_point', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('table_polylines', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        Schema::table('table_polygons', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
