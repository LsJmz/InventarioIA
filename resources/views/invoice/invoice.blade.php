@extends('include.master')

@section('title','Inventory | Facturación')

@section('page-title','Facturación')

@section('content')

# Proyecto: Inventario con inteligencia Artificial
# Responsable: Gutiérrez Chávez Francisco
# Version: 3.0 Actializada
# Fecha de creacion: 25/05/2024
# Fecha de modificación: 28/06/2024
# Descripcion
# Este archivo permitirá generar una factura nueva de ser necesario,
# con los datos correspondientes para posteriormente mandar a imprimirla o generar un PDF.


<div class="row clearfix">

    <create-invoice :categorys="{{ $category }}" :customers="{{ $customer }}"></create-invoice>

</div>


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
            
                <h2 style="visibility: hidden;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-stock">
                        Nueva factura
                    </button>
                </h2>
            </div>

            <view-invoice :categorys="{{ $category }}" :customers="{{ $customer }}"></view-invoice>

        </div>
    </div>
</div>




@endsection

@push('script')

<script type="text/javascript" src="{{ url('public/js/invoice.js') }}"></script>

@endpush