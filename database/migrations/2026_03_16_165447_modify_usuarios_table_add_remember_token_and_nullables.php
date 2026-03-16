<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->rememberToken()->after('password');
            $table->string('apellidos', 50)->nullable()->change();
            $table->string('avatar', 300)->nullable()->change();
            $table->integer('karma')->nullable()->change();
            $table->string('password', 255)->change();
        });
    }

    public function down(): void
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropRememberToken();
            $table->string('apellidos', 50)->nullable(false)->change();
            $table->string('avatar', 300)->nullable(false)->change();
            $table->integer('karma')->nullable(false)->change();
            $table->string('password', 50)->change();
        });
    }
};