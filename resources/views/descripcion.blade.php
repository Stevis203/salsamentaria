<!DOCTYPE html>
<html>
<head>
    <title>Tu Título Aquí</title>
</head>
<body>

    <h1>Titulo Principal</h1>

    <div class="centro">
        @foreach ($productos as $fila)
                <h2>{{ $fila->nombre }}</h2>
                <h2>{{ $fila->descripcion }}</h2>
                <a href="{{ route('detalleProducto', ['id' => $fila->id]) }}" class="btn btn-primary">Ver Detalles</a>

        @endforeach
    </div>


</body>
</html>
