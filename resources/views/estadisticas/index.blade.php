<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
</head>
<body>

    <h1>Estdisticas</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Número de videojuegos</th>
                <th>Número de plataformas</th>
                <th>Media de precios</th>
            </tr>
        </thead>

        <tbody>
                <tr>
                    <td>{{ $totalVideojuegos }}</td>
                    <td>{{ $totalPlataformas }}</td>
                    <td>{{ $mediaPrecios }} €</td>
                </tr>
        </tbody>
    </table>

<a href="{{ route('videojuegos.index') }}">
    <button type="button">Volver</button>
</a>
</body>
</html>