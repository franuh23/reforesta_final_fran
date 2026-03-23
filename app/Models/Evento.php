<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\Usuario;
use App\Models\Especie;

class Evento extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'tipo_terreno',
        'tipo_evento',
        'fecha',
        'imagen',
        'pdf',
        'id_usuario'
    ];

    protected $casts = [
        'fecha' => 'date',
    ];

    protected $table = 'eventos';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    public function anfitrion() {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function participantes() {
        return $this->belongsToMany(Usuario::class, 'usuarios_eventos', 'id_evento', 'id_usuario');
    }

    public function especiesIncluidas() {
        return $this->belongsToMany(Especie::class, 'eventos_especies', 'id_evento', 'id_especie');
    }
}
