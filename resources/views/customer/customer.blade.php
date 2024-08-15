<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: customer.blade.php
Version: 1.0
Fecha de creacion: 11/06/2024
Fecha de Modificacion: 11/06/2024

Descripción: Este código define la estructura de la interfaz dedicada a la gestión de clientes dentro del sistema, permitiendo a 
los usuarios crear nuevos clientes a través de un modal activado por un botón. Además, el sistema muestra una lista de todos los 
clientes existentes utilizando componentes de Vue.js. También incluye un archivo JavaScript para manejar las interacciones y 
funcionalidades relacionadas con los clientes.

 -->
@extends('include.master')

<!-- titulo de la pagina -->
@section('title','Inventory | Clientes')

<!-- Encabezado que se mostrara en la pagina -->
@section('page-title','Todos los clientes')

<!-- Inicia la sección del contenido principal -->
@section('content')


        <!-- Fila para el componente de creación de clientes -->
        <div class="row clearfix">
        	
        	<create-customer></create-customer>

        </div>


        <!-- Fila para mostrar la lista de clientes -->
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- Tarjeta de contenido -->
                    <div class="card">
                        <!-- Encabezado de la tarjeta -->
                        <div class="header">

                          <!-- Botón para abrir el modal de creación de un nuevo cliente -->
                          <h2>
                          	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-customer">
                                Cliente nuevo
                             </button>
                          </h2>
                        </div>

                        <!-- Componente Vue.js para visualizar la lista de clientes -->
                        <view-customer></view-customer>

                    </div>
                </div>
            </div>

          


@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/customer.js') }}"></script>

@endpush