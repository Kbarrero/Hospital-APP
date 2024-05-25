<?php
// app/Models/Asignacion.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable = [
        'fecha_asignada', 'estado', 'idrecepcionista', 'idturnos',
    ];
}