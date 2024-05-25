<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $table = 'turnos'; // Asegúrate de que el nombre de la tabla es correcto

    protected $primaryKey = 'idturnos'; // Especifica que la clave primaria es 'idturnos'

    public $incrementing = true; // Si 'idturnos' es auto-incremental
    protected $keyType = 'int'; // Tipo de la clave primaria, ajusta según sea necesario
}
