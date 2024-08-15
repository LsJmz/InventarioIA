<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: login_n.blade.php
Version: 2.0
Fecha de creacion: 19/05/2024
Fecha de Modificacion: 20/05/2024

Descripción: Este archivo proporciona una interfaz para el inicio de sesión , permitiendo a los usuarios
acceder y autenticarse con sus credenciales. Incluye campos para ingresar el correo y la contraseña,
maneja errores de validación y ofrece opciones para recordar la sesión y recuperar una contraseña olvidada.
 -->



@extends('layouts.app')

<!-- Define la sección de contenido -->
@section('content')
 <!-- Contenedor principal -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                 <!-- Cuerpo del panel del formulario -->
                <div class="panel-body">

                    <!-- Formulario para el inicio de sesión -->
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <!-- Campo de entrada para el email -->
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <!-- Campo de entrada para la contraseña -->
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- botones de acción -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">

                            <!-- Botón para enviar el formulario -->
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <!-- Enlace para solicitar una nueva contraseña -->
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
