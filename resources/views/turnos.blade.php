<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Turno</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Solicitud de Turno</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Seleccione el tipo de servicio para el cual desea solicitar un turno:</h2>
        <ul>
            <li><a href="{{ route('citas') }}">Citas Médicas</a></li>
            <li><a href="{{ route('facturas') }}">Pago de Facturas</a></li>
            <li><a href="{{ route('medicamentos') }}">Autorización de Medicamentos</a></li>
            <li><a href="{{ route('informacion') }}">Información General</a></li>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Hospital La Misericordia</p>
    </footer>
</body>
</html>
