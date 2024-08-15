@extends('include.master')

@section('title','Inventory | Categorías')

@section('page-title','Lista de categorías')

@section('content')


# Proyecto: Inventario con inteligencia Artificial
# Responsable: Gutiérrez Chávez Francisco
# Version: 2.0 Actializada
# Fecha de creacion: 18/05/2024
# Fecha de modificación: 20/06/2024
# Descripcion
# Este archivo permitirá asignar una nueva categoría de acuerdo al producto asignado
# así se verá visualizado en el apartado correspondiente una vez estando dentro del inventario.

<div class="row clearfix">

    <create-category></create-category>

</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-category">
                        Nueva categoría
                    </button>
                </h2>
            </div>

            <view-category></view-category>

        </div>
    </div>
</div>

@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/category.js') }}"></script>

@endpush