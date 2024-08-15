<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: user.blade.php
Version: 3.0
Fecha de creacion: 09/06/2024
Fecha de Modificacion: 11/06/2024

Descripción: Este archivo define una interfaz para la gestión de usuarios en el sistema. Permite crear nuevos usuarios 
mediante un componente específico, también cuenta con la función de visualizar a los usuarios existentes mediante una 
lista en una tarjeta, en dicha tarjeta incluye un botón para abrir un modal y agregar un nuevo usuario.
 -->

@extends('include.master')

<!-- título de la página -->
@section('title','Inventory | Usuarios')

<!-- Encabezado que se mostrará en la vista -->
@section('page-title','Usuarios')

<!-- Define el contenido de la página -->
@section('content')


        <!-- Contenido del componente para crear usuarios -->
        <div class="row clearfix">
        	
            <!-- opcion para crear un nuevo usuario -->
        	<create-user></create-user>

        </div>


        <!-- lista donde se muestran los usuarios -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                     <!-- Tarjeta para contener la lista de usuarios -->
                    <div class="card">
                        <div class="header">
                          
                        <!-- Título y botón para agregar un nuevo usuario -->
                          <h2>
                          	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-user">
                                Usuario nuevo
                             </button>
                          </h2>
                        </div>

                        <!-- visualizar la lista de usuarios -->
                        <view-user></view-user>

                    </div>
                </div>
            </div>

          


@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/user.js') }}"></script>

@endpush