<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\Evento;


class Especie extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nombre',
        'clima',
        'tiempo',
        'beneficios',
        'enlace',
        'foto'
    ];

    protected $table = 'especies';

    public function especiesParaEventos() {
        return $this->belongsToMany(Evento::class, 'eventos_especies', 'id_especie', 'id_evento');
    }

}
