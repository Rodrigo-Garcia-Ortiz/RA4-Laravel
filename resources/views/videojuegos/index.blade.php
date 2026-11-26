<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de videojuegos</title>
</head>
<body>

    <h1>Listado de videojuegos</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Precio</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($videojuegos as $videojuego)
                <tr>
                    <td>
                        <a href="{{ route('videojuegos.show', $videojuego->id) }}">
                                {{ $videojuego->nombre }}
                        </a></td>
                    <td>{{ $videojuego->plataforma }}</td>
                    <td>{{ $videojuego->precio }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>

<a href="{{ route('videojuegos.buscar') }}">
    <button type="button">Buscar por plataforma</button>
</a>

<a href="{{ route('estadisticas') }}">
    <button type="button">Ver estadisticas</button>
</a>
</body>
</html>