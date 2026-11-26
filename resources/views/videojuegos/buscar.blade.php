<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar por plataforma</title>
</head>
<body>

    <h1>Buscar por plataforma</h1>

    <form action="{{ route('videojuegos.plataformas') }}" method="POST">

        @csrf

        <p>
            <label>Plataforma:</label>
            <input type="text" name="plataforma" required>
        </p>

        <button type="submit">Buscar</button>

    </form>

    <a href="{{ route('videojuegos.index') }}">Volver</a>

</body>
</html>