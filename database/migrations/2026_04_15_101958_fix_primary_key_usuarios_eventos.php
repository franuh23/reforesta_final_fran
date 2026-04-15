<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('usuarios_eventos', function (Blueprint $table) {
            $table->dropForeign(['id_evento']);
            $table->dropForeign(['id_usuario']);
            $table->dropPrimary();
            $table->primary(['id_evento', 'id_usuario']);
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('usuarios_eventos', function (Blueprint $table) {
            $table->dropForeign(['id_evento']);
            $table->dropForeign(['id_usuario']);
            $table->dropPrimary();
            $table->primary('id_usuario');
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }
};