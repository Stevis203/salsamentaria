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
                        <h2 style="font-family: 'Times New Roman', Times, serif">Nuestros Servicios</h2>
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
        </div>
     </header>
</html>
    <title>Servicios - Salsamentaria Juachos</title>
    <style>
      body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            background-image: url('https://img.freepik.com/vector-premium/caricaturas-fondo-patrones-hamburguesas_24640-10330.jpg?w=2000'); 
        }
        footer {
        background-color: #e44d26;
        color: white;
        text-align: center;
        padding: 1em;
        width: 100%;
}
        .titulo{
            color:white;
        }

        header {
            background-color: black;
            color: white;
            text-align: center;
            padding: 0.5em;
        }

        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.7);
            margin-top: 60px;
           
        }

        h1, h2, h3 {
            color: black;
        }

        p {
            color: #555;
        }

        .highlight {
            color: #e44d26;
            font-weight: bold;
        }

        
    </style>
</head>
<body>

    <section>
        <div>
            <h3>Salsas Exquisitas</h3>
            <p>Descubre el sabor auténtico con nuestras salsas caseras, preparadas con ingredientes frescos y seleccionados con esmero. Desde la clásica Salsa de Tomate hasta nuestra innovadora Salsa de Mango Picante, cada bocado es una explosión de sabores.</p>
        </div>

        <div>
            <h3>Condimentos Premium</h3>
            <p>Eleva tus platillos con nuestra selección de condimentos premium. Desde nuestras sales marinas hasta nuestras mezclas de hierbas exclusivas, te ofrecemos ingredientes que transformarán tus comidas.</p>
        </div>

        <div>
            <h3>Snacks Irresistibles</h3>
            <p>Acompaña tus momentos con nuestros snacks irresistibles. Desde nachos crujientes hasta nueces tostadas, satisfacemos todos tus antojos con productos de la más alta calidad.</p>
        </div>

        <div class="highlight">
            <p>¡Visítanos hoy y deja que Juachos sea tu elección para condimentos y snacks de calidad superior!</p>
        </div>
    </section>
</body>
<footer>
    <p>&copy; {{ date('Y') }} Salsamentaria Juanchos - Todos los derechos reservados</p>
    <p>Para consultas y pedidos, llama al [3204336285] o visítanos en [Cra11 #15A-24 Tunja Boyacá].</p>
</footer>
</html>
