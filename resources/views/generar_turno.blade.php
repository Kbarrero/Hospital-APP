<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Turno</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="logo">
            <!-- Coloca aquí el logo del hospital -->
            <img src="ruta/al/logo.png" alt="Logo del Hospital">
        </div>
        <div class="turno">
            <h1>Número de Turno</h1>
            <div id="numero_turno"></div>
        </div>
        <div class="fecha-hora">
            <p id="fecha_hora"></p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#generar').click(function() {
                $.get('/turno/generar', function(numeroTurno) {
                    $('#numero_turno').text('Número de Turno: ' + numeroTurno);
                });
            });
        });
    </script>
</body>
</html>

