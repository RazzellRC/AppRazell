<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Proyecto</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 30px;
            max-width: 600px;
            margin: auto;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            background: #f9f9f9;
        }
        .card img {
            width: 100%;
            border-radius: 6px;
        }
        .titulo {
            font-size: 24px;
            margin-top: 15px;
        }
        .detalle {
            margin: 5px 0;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="{{ $proyecto['imagen'] }}" alt="Imagen del proyecto">
        <div class="titulo">{{ $proyecto['nombre'] }}</div>
        <div class="detalle"><strong>Descripción:</strong> {{ $proyecto['descripcion'] }}</div>
        <div class="detalle"><strong>Categoría:</strong> {{ $proyecto['categoria'] }}</div>
        <div class="detalle"><strong>Responsable:</strong> {{ $proyecto['responsable'] }}</div>
        <div class="detalle"><strong>Fecha:</strong> {{ $proyecto['fecha'] }}</div>
        <div class="detalle"><strong>Estado:</strong> {{ $proyecto['estado'] }}</div>

        <a href="/">← Volver a la lista</a>
    </div>
</body>
</html>
