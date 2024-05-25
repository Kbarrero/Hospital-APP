<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Identificación del Paciente</h1>
    </header>
    <main>
        <form action="{{ route('identificacion.store') }}" method="POST">
            @csrf
            <label for="identificacion">Documento de Identificación:</label>
            <input type="text" id="identificacion" name="identificacion" required>
            <button type="submit">Continuar</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Hospital La Misericordia</p>
    </footer>
</body>
</html>
