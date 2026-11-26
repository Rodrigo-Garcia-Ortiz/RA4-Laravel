<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del videojuego</title>
</head>
<body>

    <h1>Detalles del videojuego</h1>

    <h2>{{ $videojuego->nombre }}</h2>
    
    <p>
        <strong>Plataforma:</strong>
        {{ $videojuego->plataforma }}
    </p>

    <p>
        <strong>Precio:</strong>
        {{ $videojuego->precio }} €
    </p>

    <a href="{{ route('videojuegos.index') }}">
        <button type="button">Volver al listado</button>
    </a>

</body>
</html>