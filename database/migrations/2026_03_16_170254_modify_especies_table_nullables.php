<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('especies', function (Blueprint $table) {
            $table->string('clima', 50)->nullable()->change();
            $table->string('tiempo', 50)->nullable()->change();
            $table->string('beneficios', 50)->nullable()->change();
            $table->string('enlace', 300)->nullable()->change();
            $table->string('foto', 300)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('especies', function (Blueprint $table) {
            $table->string('clima', 50)->nullable(false)->change();
            $table->string('tiempo', 50)->nullable(false)->change();
            $table->string('beneficios', 50)->nullable(false)->change();
            $table->string('enlace', 300)->nullable(false)->change();
            $table->string('foto', 300)->nullable(false)->change();
        });
    }
};