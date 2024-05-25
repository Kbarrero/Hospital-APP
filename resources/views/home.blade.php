<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital La Misericordia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />    
    
</head>
<body>
    <header>
        <h1>Hospital La Misericordia</h1>
    </header>
    <main>
        <h2>Bienvenidos</h2>
        <p>Seleccione el servicio que desea solicitar:</p>
        <ul>
            <li><a href="{{ route('citas') }}">Solicitud de Citas Médicas</a></li>
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
