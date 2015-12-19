@extends('company.admin_layout')

@section('title') Datos de Cuenta  @stop 

@section('titleHeader')Datos Personales  @stop 

@section('content')
	<section class="container">
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<div class="card-image">
	              <img src="{!! asset('img/mi-curriculum2.jpg') !!}">
	              <span class="card-title">Datos de Acceso</span>
	            </div>
					<div class="card-content">
						<div class="row">
							{!! Form::open() !!}
								<div class="input-field col s12  grey-text text-darken-2">
									{!! Form::email('email', null, ['class' => 'validate'])	!!}
									<label for="email">Correo Electronico</label>
								</div>
								<div class="input-field  col s6  grey-text text-darken-2 ">
									{!! Form::password('password',['class' => 'validate'])	!!}
									<label for="password">Contraseña</label>
								</div>
								<div class="input-field  col s6 grey-text text-darken-2">
									{!! Form::password('password_confirm',['class' => 'validate'])	!!}
									<label for="password_confirm">Confirmar Contraseña</label>
								</div>
					  			<div class="input-field col s12 grey-text text-darken-2 center">
					  				<button class="btn waves-effect waves-light green darken-2 btn-large center" type="submit" name="action">Actualizar
										<i class="material-icons left">mode_edit</i>
										</button>
					  			</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-content">
						<h5 class="center">Datos de Contacto</h5>
							<div class="row">
							{!! Form::open() !!}
								<div class="col s12">
									<div class="input-field col s12  grey-text text-darken-2">
										{!! Form::text('contacto_empresa', null, ['class' => 'validate'])	!!}
										<label for="contacto_empresa">Nombre Completo</label>
									</div>
									<div class="input-field col s12  grey-text text-darken-2">
										{!! Form::text('cargo_contacto', null, ['class' => 'validate'])	!!}
										<label for="cargo_contacto">Cargo en la Empresa</label>
									</div>
									<div class="input-field col s12 grey-text text-darken-2">
										{!! Form::email('email_contacto', null, ['class' => 'validate'])	!!}
										<label for="email_contacto">Correo Electronico</label>
									</div>
									<div class="input-field  col s6  grey-text text-darken-2 ">
										{!!Form::select('telefono1',array('celular'=>'Celular','fijo'=>'Fijo','oficina'=>'Oficina'), null, ['placeholder' => 'Tipo de Telefono', 'class' => 'validate'])!!}
										<label for="telefono1">Tipo de Telefono</label>
									</div>
									<div class="input-field col s6 grey-text text-darken-2">
										{!! Form::text('txt_telefono1', null, ['class' => 'validate'])	!!}
										<label for="txt_telefono1">Numero</label>
									</div>
									<div class="input-field  col s6 grey-text text-darken-2">
										{!!Form::select('telefono2',array('celular'=>'Celular','fijo'=>'Fijo','oficina'=>'Oficina'), null, ['placeholder' => 'Tipo de Telefono'])!!}
							            				{!!	Form::label('telefono2','Tipo de Telefono')!!}
									</div>
									<div class="input-field col s6 grey-text text-darken-2">
										{!! Form::text('txt_telefono2', null, ['class' => 'validate'])	!!}
										{!!	Form::label('txt_telefono2','Numero')	!!}
									</div>
								</div>
					  			<div class="input-field col s12 grey-text text-darken-2 center">
					  				<button class="btn waves-effect waves-light green darken-2 btn-large center" type="submit" name="action">Actualizar
										<i class="material-icons left">mode_edit</i>
										</button>
					  			</div>
								{!! Form::close() !!}
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection