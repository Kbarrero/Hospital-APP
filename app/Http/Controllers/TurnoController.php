<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;





class TurnoController extends Controller
{
    public function generarTurno()
    {
        // Obtener el último turno generado
        $ultimoTurno = Turno::orderBy('idturnos', 'desc')->first();

        // Obtener el número de turno siguiente
        $numeroSiguiente = $ultimoTurno ? intval(preg_replace('/[^0-9]/', '', $ultimoTurno->numero)) + 1 : 1;

        // Formatear el número de turno como "A-001"
        $numeroFormateado = 'A-' . str_pad($numeroSiguiente, 3, '0', STR_PAD_LEFT);

        // Guardar el nuevo turno en la base de datos
        $turno = new Turno();
        $turno->numero = $numeroSiguiente; // Guardar el número sin formato en la base de datos
        $turno->save();

        // Retornar el número de turno formateado
        return $numeroFormateado;
    }

    public function llamar(Request $request, $id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'llamado';
        $turno->save();

        return redirect()->route('turnos.index')->with('success', 'Turno llamado.');
    }

    public function atender(Request $request, $id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'atencion';
        $turno->save();

        return redirect()->route('turnos.index')->with('success', 'Turno en atención.');
    }

    public function atendido(Request $request, $id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'atendido';
        $turno->save();

        return redirect()->route('turnos.index')->with('success', 'Turno atendido.');
    }

    public function cancelar(Request $request, $id)
    {
        $turno = Turno::findOrFail($id);
        $turno->estado = 'cancelado';
        $turno->save();

        return redirect()->route('turnos.index')->with('success', 'Turno cancelado.');
    }

    public function index()
    {
        $turnos = Turno::all();
        return view('turnos.index', compact('turnos'));
    }

    
    public function show($id)
    {
        // Asegúrate de que la clave primaria es 'idturnos'
        $turno = Turno::findOrFail($id); // 'findOrFail' funcionará correctamente porque el modelo ya sabe que la clave primaria es 'idturnos'
        return response()->json($turno);
    }
    

}

class Turno extends Model
{
    use HasFactory;

    protected $table = 'turnos'; // Asegúrate de que el nombre de la tabla es correcto

    protected $primaryKey = 'idturnos'; // Especifica que la clave primaria es 'idturnos'

    public $incrementing = true; // Si 'idturnos' es auto-incremental
    protected $keyType = 'int'; // Tipo de la clave primaria, ajusta según sea necesario
}
