<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Version: 2.0
Nombre del Archivo: app.blade.php
Fecha de creacion: 16/05/2024
Fecha de Modificacion: 18/05/2024

Descripción: Descripción: Este código es una plantilla básica en HTML, Incluye la estructura general del documento con un 
encabezado (head) que define metadatos como el título y enlaces a hojas de estilo. Utiliza un token CSRF para proteger contra 
ataques de falsificación de solicitudes. En el cuerpo (body), se presenta una barra de navegación (navbar) con opciones de 
autenticación para iniciar sesión, registrarse o cerrar sesión, dependiendo del estado del usuario (invitado o autenticado). 
La sección principal del contenido se carga dinámicamente mediante ('content'), y se incluyen scripts para manejar la 
funcionalidad interactiva de la página
 -->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título de la aplicación -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Estilos -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Barra de navegación -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Menu Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Imagen de la marca -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Lado izquierdo de la barra de navegación -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Lado derecho de la barra de navegación -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Enlaces de autenticación -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                 <!-- Menú desplegable -->
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <!--cierre de sesión -->
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Contenido de la página -->
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
