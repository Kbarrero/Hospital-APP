<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de Facturas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Pago de Facturas</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <ul>
            <li><a href="{{ route('generar_turno') }}">Citas médicas</a></li>
            <li><a href="{{ route('generar_turno') }}">Cirugías</a></li>
            <li><a href="{{ route('generar_turno') }}">Exámenes</a></li>
            <li><a href="{{ route('generar_turno') }}">Multas</a></li>
        </ul>

    </main>
    <footer>
        <p>&copy; 2024 Hospital La Misericordia</p>
    </footer>
</body>
</html>
