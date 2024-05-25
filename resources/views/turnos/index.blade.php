@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Turnos</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($turnos as $turno)
                <tr>
                    <td>{{ $turno->idturnos }}</td>
                    <td>{{ $turno->numero }}</td>
                    <td>{{ $turno->estado }}</td>
                    <td>
                        @if($turno->estado == 'pendiente')
                            <form action="{{ route('turnos.llamar', $turno) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-primary">Llamar</button>
                            </form>
                        @elseif($turno->estado == 'llamado')
                            <form action="{{ route('turnos.atender', $turno) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-warning">Atender</button>
                            </form>
                        @elseif($turno->estado == 'atencion')
                            <form action="{{ route('turnos.atendido', $turno) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-success">Atendido</button>
                            </form>
                            <form action="{{ route('turnos.cancelar', $turno) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancelar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
