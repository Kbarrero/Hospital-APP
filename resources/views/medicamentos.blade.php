<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorización de Medicamentos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Autorización de Medicamentos</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <ul>
            <li><a href="{{ route('generar_turno') }}">POS</a></li>
            <li><a href="{{ route('generar_turno') }}">No POS</a></li>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Hospital La Misericordia</p>
    </footer>
</body>
</html>
