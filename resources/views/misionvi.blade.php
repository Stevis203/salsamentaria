<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salsamentaria Juanchos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('public/build') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    
    <title>Salsamentaria</title>
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
        @include('menu')
     </header>
    <title>Misión y Visión</title>
</head>
<body>
    <div class="cajitas">
        <section class="mision-vision">
            <div class="mision">
                <h2>Misión</h2>
                <p>
                    Nuestra misión es proporcionar productos/servicios de alta calidad que satisfagan las necesidades y expectativas de nuestros clientes, contribuyendo al bienestar y progreso de la comunidad.
                </p>
            </div>

            <div class="vision">
                <h2>Visión</h2>
                <p>
                    Ser reconocidos como líderes en nuestra industria, innovando continuamente para ofrecer soluciones que generen un impacto positivo en la sociedad y el medio ambiente.
                </p>
            </div>
        </section>
    </div>

    <footer>
        <!-- Puedes agregar un pie de página aquí si lo deseas -->
    </footer>

</body>
</html>
<style>
    body {
        background-image: url('https://i.pinimg.com/474x/d7/f7/92/d7f792f87211dd36735982f4cae72e08.jpg');
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    color: #333;
    margin: 0;
    
}

.cajitas {
    max-width: 1000px;
    height: 250px;
    margin: auto;
    background-color: rgba(255, 255, 255, 0.7); /* Fondo semi-transparente para mejor legibilidad */
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-top: 100px;
}

.mision-vision {
    display: flex;
    justify-content: space-around;
}

.mision,
.vision {
    flex: 1;
    padding: 20px;
    margin: 10px;
    background-color: rgba(255, 255, 255, 0.8); /* Fondo semi-transparente */
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Marco con sombra */
    text-align: center; /* Centra el contenido dentro de .mision y .vision */
}

h2 {
    color: #0c0d0e;
}
header {
    text-align: center; /* Centra el contenido dentro del header */
    padding: 20px;
}

/* Puedes agregar más estilos según tus preferencias */

</style>