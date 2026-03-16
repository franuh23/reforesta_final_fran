<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->string('imagen', 300)->nullable()->change();
            $table->string('descripcion', 300)->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('eventos', function (Blueprint $table) {
            $table->string('imagen', 300)->nullable(false)->change();
            $table->string('descripcion', 300)->nullable(false)->change();
        });
    }
};