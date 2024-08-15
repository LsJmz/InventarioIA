<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: home.blade.php
Version: 1.0
Fecha de creacion: 23/05/2024
Fecha de Modificacion: 23/05/2024

Descripción: Este archivo presenta una interfaz del panel de control, para los usuarios autenticados. Muestra un mensaje de éxito 
si existe un estado de sesión y un mensaje de bienvenida indicando que el usuario ha iniciado sesión correctamente
 -->
@extends('layouts.app')

<!-- Define la sección de contenido -->
@section('content')

<!-- Contenedor principal -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <!-- Encabezado del panel -->
                <div class="panel-heading">Dashboard</div>

                <!-- Cuerpo del panel -->
                <div class="panel-body">

                    <!-- Mensaje de estado si existe -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Mensaje principal de bienvenida -->
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
