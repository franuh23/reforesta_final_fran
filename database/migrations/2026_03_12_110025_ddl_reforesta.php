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
        // Tabla usuarios
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nick', 50);
            $table->string('nombre', 50);
            $table->string('apellidos', 50);
            $table->string('email', 50);
            $table->integer('karma');
            $table->string('avatar', 300);
            $table->string('password', 50);
            $table->timestamps();
        });

        // Tabla eventos
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 300);
            $table->string('ubicacion', 50);
            $table->string('tipo_terreno', 50);
            $table->string('tipo_evento', 50);
            $table->string('imagen', 300);
            $table->timestamps();
        });

        // Tabla especies
        Schema::create('especies', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('clima', 50);
            $table->string('tiempo', 50);
            $table->string('beneficios', 50);
            $table->string('enlace', 300);
            $table->string('foto', 300);
            $table->timestamps();
        });

        // Tabla usuarios_eventos
        Schema::create('usuarios_eventos', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->id('id_evento');
            $table->primary('id_usuario', 'id_evento');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->timestamps();
        });

        // Tabla eventos_especies
        Schema::create('eventos_especies', function (Blueprint $table) {
            $table->id('id_evento');
            $table->id('id_especie');
            $table->primary('id_evento', 'id_especie');
            $table->foreign('id_evento')->references('id')->on('eventos');
            $table->foreign('id_especie')->references('id')->on('especies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }

    public function down(): void
    {
        Schema::dropIfExists('especies');
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios_eventos');
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos_especies');
    }
};
