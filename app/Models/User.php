<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $table = 'turnos';
    protected $primaryKey = 'idturnos';

    protected $fillable = [
        'numero',
        'fecha_solicitud',
        'estado',
        'fecha_asignacion',
        'idpacientes',
        'idservicios',
    ];
}
