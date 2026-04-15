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
        Schema::table('eventos_especies', function (Blueprint $table) {
            // Eliminar las claves foráneas
            $table->dropForeign(['id_evento']);
            $table->dropForeign(['id_especie']);
            
            // Eliminar la clave primaria actual
            $table->dropPrimary();
            
            // Crear la nueva clave primaria compuesta
            $table->primary(['id_evento', 'id_especie']);
            
            // Volver a crear las claves foráneas
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('eventos_especies', function (Blueprint $table) {
            $table->dropForeign(['id_evento']);
            $table->dropForeign(['id_especie']);
            $table->dropPrimary();
            $table->primary('id_evento');
            $table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('cascade');
        });
    }
};
