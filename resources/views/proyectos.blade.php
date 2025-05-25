<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Proyectos</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        .contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px;
            background: #f9f9f9;
        }
        .card img {
            width: 100%;
            border-radius: 6px;
        }
        .titulo {
            font-weight: bold;
            font-size: 18px;
            margin-top: 10px;
        }
        .detalle {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>Lista de Proyectos</h1>
    <div class="contenedor">
        @foreach ($proyectos as $proyecto)
            <div class="card">
                <img src="{{ $proyecto['imagen'] }}" alt="Imagen del proyecto">
                <div class="titulo">{{ $proyecto['nombre'] }}</div>
                <div class="detalle">{{ $proyecto['descripcion'] }}</div>
                <div class="detalle">📁 {{ $proyecto['categoria'] }}</div>
                <div class="detalle">👤 {{ $proyecto['responsable'] }}</div>
                <div class="detalle">📅 {{ $proyecto['fecha'] }}</div>
                <div class="detalle">🟢 Estado: {{ $proyecto['estado'] }}</div>
                <a href="/detalle/{{ $proyecto['id'] }}">Ver detalle</a>
            </div>
        @endforeach
    </div>
</body>
</html>
