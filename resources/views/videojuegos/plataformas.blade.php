<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos por plataforma</title>
</head>
<body>

    <h1>Videojuegos por plataforma</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($videojuegosPlataforma as $videojuego)
                <tr>
                    <td>{{ $videojuego->nombre }}</td>
                    <td>{{ $videojuego->plataforma }}</td>
                    <td>{{ $videojuego->precio }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>

<a href="{{ route('videojuegos.index') }}">
    <button type="button">Volver</button>
</a>
</body>
</html>