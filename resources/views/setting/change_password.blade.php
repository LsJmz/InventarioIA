@extends('include.master')


@section('title','Inventory | Configuración')


@section('page-title','Configuración')


@section('content')

# Proyecto: Inventario con inteligencia Artificial
# Responsable: Gutiérrez Chávez Francisco
# Version: 3.0 Actializada
# Fecha de creacion: 06/05/2024
# Fecha de modificación: 10/06/2024
# Descripcion
# Este archivo permitirá cambiar la contraseña
# de acceso de acuerdo a el rol asignado en este caso sea como administrador.

<div class="row clearfix">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="card">
			<div class="header">
				<h2>
					
                   Cambiar la contraseña					
				</h2>
			</div>


			<div class="body">

				
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
                @endif
                
                @if(Session::has('message'))
                 <p class="alert alert-info">{{ Session::get('message') }}</p>
                @endif
				
                <form action="{{ route('password.store') }}" method="post">
                    
                    {{ csrf_field() }}
					
					<div class="row">
						<div class="col-md-12">
                           
                            <div class="input-group">
                               
                                <span class="input-group-addon">
                                    <i class="material-icons">password</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" 
                                     class="form-control"
                                     name="old_password" placeholder="Ingresá tu contraseña actual">
                                </div>
                            </div>

                            <div class="input-group">
                               
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" 
                                     class="form-control"
                                     name="password" placeholder="Ingresá tu nueva contraseña">
                                </div>
                            </div>

                            <div class="input-group">
                               
                                <span class="input-group-addon">
                                    <i class="material-icons">lock_open</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" 
                                     class="form-control"
                                     name="password_confirmation" placeholder="Reingresá tu nueva contraseña">
                                </div>
                            </div>
                        </div>
					</div>


					<div class="row text-center">
						<button type="submit" class="btn bg-teal">Actualizar</button>
					</div>


				</form>

			</div>


		</div>
	</div>
</div>




@endsection