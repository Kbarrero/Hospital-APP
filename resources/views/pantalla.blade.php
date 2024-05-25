<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventanilla de Turnos</title>
    <link rel="stylesheet" href="{{ asset('css/ventanilla.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="ventanilla">
        <h1>Turnos en Atención</h1>
        <table>
            <thead>
                <tr>
                    <th>Ventanilla</th>
                    <th>Turno</th>
                </tr>
            </thead>
            <tbody id="tabla-turnos">
                <!-- Aquí se insertarán las filas de la tabla -->
            </tbody>
        </table>
        <p>Por favor, acérquese a la ventanilla cuando su turno sea llamado.</p>
    </div>

    <script>
        $(document).ready(function() {
            // Función para actualizar los turnos
            function actualizarTurnos() {
                $.get('/turnos/actuales', function(turnos) {
                    // Limpiar la tabla antes de insertar nuevas filas
                    $('#tabla-turnos').empty();

                    // Insertar nuevas filas en la tabla
                    $.each(turnos, function(index, turno) {
                        $('#tabla-turnos').append(`<tr><td>${turno.ventanilla}</td><td>${turno.numero}</td></tr>`);
                    });
                });
            }

            // Actualizar los turnos cada 5 segundos
            setInterval(actualizarTurnos, 5000);
            
            // Mostrar los turnos inicialmente al cargar la página
            actualizarTurnos();
        });
    </script>
</body>
</html>
