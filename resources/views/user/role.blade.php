<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: role.blade.php
Version: 1.0
Fecha de creacion: 08/06/2024
Fecha de Modificacion: 08/06/2024

Descripción: Este código define una interfaz para la gestión de roles. Incluye un componente para crear nuevos roles Además, muestra una tarjeta 
para visualizar la lista de roles existentes. También incluyen scripts adicionales para la funcionalidad específica relacionada con los roles. 
Esta estructura permite tanto la creación como la visualización de roles dentro del sistema.
 -->

@extends('include.master')


<!-- título de la página -->
@section('title','Inventory | Gestión de roles')

<!-- Encabezado que se mostrará en la vista -->
@section('page-title','Gestión de roles')

<!-- Define el contenido de la página -->
@section('content')

        <!-- Componente para crear un nuevo rol -->
        <div class="row clearfix">
        	<create-role></create-role>

        </div>

        <!-- Fila para mostrar la lista de roles -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="card">
                        <div class="header">
                          
                        <!-- Título y botón para agregar un nuevo rol -->
                          <h2>
                          	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-category">
                                Rol nuevo
                             </button>
                          </h2>
                        </div>

                        <!-- visualizar la lista de roles -->
                        <view-role></view-role>

                    </div>
                </div>
            </div>

          


@endsection

@push('script')

<!-- archivo JavaScript para funcionalidad específica de los roles -->
<script type="text/javascript" src="{{ url('public/js/role.js') }}"></script>

@endpush