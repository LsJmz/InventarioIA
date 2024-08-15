@extends('include.master')

@section('title','Inventory | Productos')

@section('page-title','Lista de productos')

@section('content')

# Proyecto: Inventario con inteligencia Artificial
# Responsable: Gutiérrez Chávez Francisco
# Version: 1.0 Actializada
# Fecha de creacion: 12/05/2024
# Fecha de modificación: 13/06/2024
# Descripcion
# Este archivo permitirá asignar un producto nuevo para contemplarlo en el inventario
# de tal manera que sea existente y se encuentre a disposición.


<div class="row clearfix">
    <create-product :categorys="{{ json_encode($category) }}"></create-product>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-product">
                        Producto nuevo
                    </button>
                </h2>
            </div>

            <view-product :categorys="{{ json_encode($category) }}"></view-product>

        </div>
    </div>
</div>

@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/product.js') }}"></script>

@endpush