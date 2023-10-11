<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        @forelse($tipos as $fila)
        <div class="tipos">
        <h4>Nombre</h4>{{$fila->nombre}}
        <h4>Marca</h4>{{$fila->marca}}
        <h4>Estado</h4>{{$fila->estado}}
        <div class="valor">
        <h4>Precio</h4>{{$fila->precio}}
        </div>
        <a href="{{route('compra',['id=>$fila->codigoProducto'])}}">Comprar</a>
        </div>
        @empty
        @endforelse
</body>
</html>