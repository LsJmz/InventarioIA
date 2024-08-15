<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: sidebar.blade.php
Version: 3.0
Fecha de creacion: 26/05/2024
Fecha de Modificacion: 29/05/2024

Descripción: Este código define un menú lateral del la pagina web que muestra la información del usuario, incluyendo su foto, nombre y correo 
electrónico, proporciona opciones para cambiar la contraseña o cerrar sesión. También incluye un menú de navegación dinámico, que permite acceder
a diferentes secciones de la pagina y resalta el enlace activo según la ruta actual.
 -->
       
       <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Información del usuario -->
            <div class="user-info">
                <!-- Imagen del usuario -->
                <div class="image">
                    <img src="{{ url('images/user.png') }}" width="60" height="60" alt="User" />
                </div>

                <!-- Contenedor de información del usuario -->
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <!-- Correo electrónico del usuario -->
                    <div class="email">{{ Auth::user()->email  }}</div>
                    <!-- Menú de opciones del usuario -->
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <!-- Opcion para cambiar la contraseña -->
                            <li><a href="{{ url('password-change') }}"><i class="material-icons">person</i>Perfil</a></li>
                            <!-- Opcion para cerrar sesión -->
                            <li><a href="{{ url('logout') }}"><i class="material-icons">input</i>Desconectar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Fin de la información del usuario -->

            <!-- Menú de navegación -->
            <div class="menu">
                <ul class="list">

                     <!-- Encabezado del menú principal -->
                    <li class="header">NAVEGACIÓN PRINCIPAL</li>

                    <!-- Opcion al Dashboard -->
                    <li @if(Route::currentRouteName()=='' ) class="active" @endif>
                        <a href="{{ url('/') }}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    @php

                    $side_menu = Session::get('side_menu');
                    
                    @endphp

                    @foreach($side_menu[0] as $value)

                    <!-- Si hay submenús, se crean como un menú desplegable -->
                    @if(count($value['sub_menu'])>0)
                    <li class="parent">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">{{ $value['icon'] }}</i>
                            <span>{{ $value['name'] }}</span>
                        </a>
                        <ul class="ml-menu">

                        <!-- Submenús -->
                            @foreach($value['sub_menu'] as $sub)
                            <li @if(Route::currentRouteName()==$sub->menu_url) class="active" @endif>
                                <a href="{{ $sub->menu_url ? route($sub->menu_url) : '' }}">
                                    <span>{{ $sub->name }}</span>
                                </a>

                            </li>
                            @endforeach

                        </ul>
                    </li>

                    @else

                    <!-- Elemento de menú sin submenús -->
                    <li @if(Route::currentRouteName()==$value['url']) class="active" @endif>
                        <a href="{{ $value['url'] ? route($value['url']) : '' }}">
                            <i class="material-icons">{{ $value['icon'] }}</i>
                            <span>{{ $value['name'] }}</span>
                        </a>
                    </li>

                    @endif

                    @endforeach()

                </ul>
            </div>
            <!-- Fin del menú de navegación -->
        </aside>