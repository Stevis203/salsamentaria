<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/build') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

    <header>
    <div class="bobb">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h2 style="font-family: 'Times New Roman', Times, serif">Productos</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
    
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
            @include('menu')
            @auth
           <!-- Aplica las clases de estilo al enlace "Ver Carrito" -->
        <li class="nav-item">
            <a class="nav-link nav-link-ver-carrito" href="{{ route('ver-carrito') }}">🛒</a>
        </li>

        @endauth
        </div>
     </header>
     <body>
        <div class="todo">
            <div class="centro">
               <!-- resources/views/mostrarproductos.blade.php -->

    <div class="container">

        @foreach ($productos as $fila)
            <div class="holaa">
                <h3 class="card-title">{{ $fila->nombre }}</h3>
                <img src="{{ asset('img') . '/' . $fila->imagen }}" class="card-img-top" alt="...">
                <h5 class="card-title">{{ $fila->precio }}</h5>

                {{-- Formulario para agregar al carrito --}}
                <form action="{{ route('agregar-al-carrito', $fila) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Agregar al Carrito</button>
                </form>
            </div>
        @endforeach


    </div>

            </div>            
        </div>
       
    </div>
</body>
<footer>
    <p>&copy; {{ date('Y') }} Salsamentaria Juanchos - Todos los derechos reservados</p>
    <p>Para consultas y pedidos, llama al [3204336285] o visítanos en [Cra11 #15A-24 Tunja Boyacá].</p>
</footer>
</html>
<style>
body{
    background-image: url("https://img.freepik.com/vector-premium/fondo-transparente-alimentos_651154-996.jpg");
}
.nav-link-ver-carrito {
        font-size: 50px; /* Ajusta el tamaño del texto, incluyendo el emoji */
        color: #fff; /* Cambia el color del texto a blanco */
        margin-right: 15px; /* Añade un espacio a la derecha del enlace */
    }

    .nav-link-ver-carrito:hover {
        text-decoration: none; /* Elimina la subrayado al pasar el ratón */
        color: #ffd700; /* Cambia el color del texto al pasar el ratón */
    }
footer {
    background-color: #c8816f;
    color: white;
    text-align: center;
    padding: 1em;
    width: 100%;
}
/* Estilo para cada caja de imagen y su contenido */
.todo {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between; /* Ajusta la distribución del espacio entre las cajas */
    margin: 20px auto;
    max-width: 800px; /* Ajusta el ancho máximo del contenedor */
    padding: 20px; /* Espacio alrededor del contenido */
}


/* Estilo para cada caja de imagen y su contenido */
.centro {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.holaa {
    width: calc(40.40% - 20px);
    margin: 10px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
    text-align: center;
    display: inline-block;
    vertical-align: top;
    transition: transform 0.3s ease-in-out;
}

/* Estilo para el efecto de desplazamiento al pasar el ratón */
.holaa:hover {
    transform: scale(1.05); /* Aumenta ligeramente el tamaño al pasar el ratón */
}

.holaa img {
    max-width: 100%;
    max-height: 80%; /* Hace que las imágenes se ajusten a la altura fija de las cajas */
    border-radius: 8px; /* Agrega esquinas redondeadas a las imágenes */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Añade una sutil sombra a las imágenes */
}

/* Estilo para el título */
.titulo {
    text-align: center;
    margin: 20px 0;
    color: #333;
    font-size: 24px;
}
.nombre{
    text-align: center;
    margin: 25px 0;
    color:white;
    font-size: 40px; 
}
</style>x
