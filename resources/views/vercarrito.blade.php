<!-- resources/views/vercarrito.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Carrito de Compras</h2>
            </div>
            <div class="card-body">
                @if (count($carrito) > 0)
                    <ul class="list-group">
                        @foreach ($carrito as $producto)
                            <li class="list-group-item">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span>{{ $producto->nombre }}</span>
                                    <span class="badge badge-primary badge-pill">Precio: {{ $producto->precio }}</span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>El carrito está vacío.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
