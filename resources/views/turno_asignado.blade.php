<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turno Asignado</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Turno Asignado</h1>
    </header>
    <main>
        <h2>Su turno es: {{ $turno }}</h2>
        <p>Por favor, espere a ser llamado.</p>
        <a href="{{ route('home') }}">Volver a Inicio</a>
    </main>
    <footer>
        <p>&copy; 2024 Hospital La Misericordia</p>
    </footer>
</body>
</html>
