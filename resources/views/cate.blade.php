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
                        <h2 style="font-family: 'Times New Roman', Times, serif">Salsamentaria Juanchos</h2>
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
                                            {{ __('Salir') }}
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
     </header>
    
     <body>
        @include('menu')
       
        <div class="titulo">
            <h1>CATEGORIAS</h1>
        <div class="todo">
            <div class="centro">
                <a href="{{route('compra')}}">
                @foreach ($catego as $cate)
                
                <div class="holaa">
                    <a href="{{ route('todo')}}"><img src="{{ asset('img') . '/' . $cate->imagen }}" class="card-img-top" alt="..."></a>
                    
                    <h5 class="card-title">{{ $cate->nombre }}</h5>
                    <!-- Agrega aquí el enlace o cualquier otro contenido que desees -->
                </div>
                @endforeach
            </a>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div style="background-color: rgb(255, 255, 255)" class="abaj">
            <h3>con el derecho reservado al autor</h3>
        </div>
    </div>
</body>
</html>
<style>
body{
     background-image: url("https://img.freepik.com/vector-premium/fondo-transparente-alimentos_651154-996.jpg");
}
.todo {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px auto;
    max-width: 1000px; /* Ajusta el ancho máximo del contenedor */
    padding: 20px; /* Espacio alrededor del contenido */
}

/* Estilo para cada caja de imagen y su contenido */
.holaa {
    width: 23%; /* Ancho de la caja de imagen */
    height: 220px; /* Altura fija para las cajas (ajusta según tus preferencias) */
    margin: 10px;
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    text-align: center;
    display: inline-block; /* Para que las cajas se coloquen en línea */
    vertical-align: top; /* Para alinear las cajas en la parte superior */
}

.holaa img {
    max-width: 100%;
    max-height: 80%; /* Hace que las imágenes se ajusten a la altura fija de las cajas */
}

/* Estilo para el título */
.titulo {
    text-align: center;
    margin: 20px 0;
    color: #333;
    font-size: 24px;
}


</style>
