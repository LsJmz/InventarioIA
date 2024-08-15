<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: vendor.blade.php
Version: 2.0
Fecha de creacion: 02/06/2024
Fecha de Modificacion: 05/06/2024

Descripción: Este archivo configura una página para la gestión de proveedores en el sistema. Establece el título y el encabezado de la página, y 
proporciona un botón para agregar nuevos proveedores mediante un modal. Además, muestra una lista de proveedores usando un componente Vue.js.
 -->

@extends('include.master')

<!-- título de la página -->
@section('title','Inventory | Proveedores')

<!-- Encabezado -->
@section('page-title','Lista de proveedores')

<!-- Inicia la sección de contenido principal de la página -->
@section('content')

<!-- Fila principal para el contenido -->
<div class="row clearfix">
    <create-vendor></create-vendor>
</div>

<!-- Fila para el contenido adicional -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- Tarjeta de contenido -->
        <div class="card">
             <!-- Encabezado de la tarjeta -->
            <div class="header">
                <!-- Título de la tarjeta -->
                <h2>
                    <!-- Botón para crear el nuevo proveedor -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-vendor">
                        Proveedor nuevo
                    </button>
                </h2>
            </div>

            <!-- Componente Vue.js para visualizar la lista de proveedores -->
            <view-vendor></view-vendor>

        </div>
    </div>
</div>

@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/vendor.js') }}"></script>

@endpush