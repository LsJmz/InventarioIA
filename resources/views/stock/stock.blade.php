<!--
Proyecto: Inventario con inteligencia artificial
Responsable: Omar Alexander Diaz Martinez 
Nombre de Archivo: stock.blade.php
Version: 1.0
Fecha de creacion: 14/06/2024
Fecha de Modificacion: 14/06/2024

Descripción: Este código define la estructura de una interfaz para la gestión de existencias de productos. Esto incluye componentes 
Vue.js para crear y visualizar las existencias y cantidad de productos, pasando datos como la fecha actual, proveedores, categorías 
y productos. También hace referencia a un archivo JavaScript que maneja la lógica relacionada con las existencias.
 -->

@extends('include.master')

<!-- titulo de la pagina -->

@section('title','Inventory | Existencias')

<!-- Encabezado que se mostrara en la pagina -->
@section('page-title','Lista de Existencias')

<!-- Contenido principal de la página -->
@section('content')


<!-- Fila para la creación de existencias -->
<div class="row clearfix">

    <!-- crear nuevas existencias -->
    <!-- Se pasa la fecha actual, los proveedores y las categorías como propiedades -->
    <create-stock :date="{{ json_encode(date('Y-m-d')) }}" :vendors="{{ $vendor }}" :categorys="{{ $category }}"></create-stock>

</div>

<!-- visualización de existencias -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <!-- Tarjeta de contenido -->
        <div class="card">
            <div class="header">
                
                <!-- Título de la tarjeta -->
                <h2>
                    <!-- Botón para abrir un modal para agregar existencias -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-stock">
                        Agregar Existencias
                    </button>
                </h2>
            </div>

            <!-- Se pasan los proveedores, categorías y productos como propiedades -->
            <view-stock :vendors="{{ $vendor }}" :categorys="{{ $category }}" :products="{{ $product }}"></view-stock>

        </div>
    </div>
</div>


@endsection

@push('script')

<!-- Inclusión del archivo JavaScript para manejar la lógica de existencias -->
<script type="text/javascript" src="{{ url('public/js/stock.js') }}"></script>

@endpush