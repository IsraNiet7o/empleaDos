@extends('layouts.principal')

@section('title')
	Registrarme
@stop


@section('content')
<div class="section">
<h2 class="center green-text header condensada-regular">Regístrate Gratis</h2>
	<div class="container">
	  <div class="row ">
	    <div class="col s12 l6">
			<div class="card medium">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="../img/aspirante_create.jpg">
				</div>
				<div class="card-content ">
					<span class="card-title activator grey-text text-darken-4"> Aviso de Privacidad<i class="material-icons right">more_vert</i></span>
					<p>
					<p class="grey-text text-darken-2">Si no aceptas no podras Registrarte.</p>
				</div>
				<div class="card-reveal">
					<span class="card-title grey-text text-darken-4 condensada-regular">Aviso de Privacidad<i class="material-icons right">close</i></span>
					<p class="grey-text text-darken-2 condensada-regular">
						La empresa responsable de tratar sus datos personales (los "Datos") aquí recabados con la finalidad de ofrecerle nuestros servicios a través del sitio de internet para proporcionar una plataforma para la publicación de ofertas de trabajo y búsqueda de empleo por terceros así como el envío promociones comerciales de bienes o servicios propios o de terceros que consideramos pueden ser de su interés.
					</p>
					<p class="grey-text text-darken-2 condensada-regular">
						Para mayor información acerca del tratamiento de sus datos y de los derechos que puede hacer valer usted puede acceder al aviso de privacidad completo disponible en: https://portarl-empleo/Aviso_Privacidad.
					</p>
				</div>
			</div>
			
	    </div>
	    <div class="col s12 l6 card medium">
			<div class="row">
				{!! Form::open() !!}
        			<div class="input-field col s12 grey-text text-darken-2">
        				{!! Form::email('email', null, ['class' => 'validate', 'required' => 'required'])	!!}
        				{!!	Form::label('email','Correo Electronico')	!!}
        			</div>
        			<div class="input-field col s12 grey-text text-darken-2">
        				{!! Form::email('confir_email', null, ['class' => 'validate','required' => 'required'])	!!}
        				{!!	Form::label('confir_email','Confirmar Correo Electronico')	!!}
        			</div>
        			<div class="input-field  col s6  grey-text text-darken-2 ">
        				{!! Form::password('password', null, ['class' => 'validate','required' => 'required'])	!!}
        				{!!	Form::label('password','Contraseña')!!}
        			</div>
        			<div class="input-field  col s6 grey-text text-darken-2">
        				{!! Form::password('password', null, ['class' => 'validate', 'required' => 'required'])	!!}
        				{!!	Form::label('password','Confirmar Contraseña')!!}
        			</div>
        			<div class="input-field col s12 center">
        				{!!Form::checkbox('name', 'value' )!!}
						<input type="checkbox" id="test5" />
      					<label for="test5" class="grey-text">He leído y acepto el Aviso de Privacidad.</label>
        			</div>
        			<div class="input-field col s12 grey-text text-darken-2 center">
        				<button class="btn waves-effect waves-light  green btn-large center" type="submit" name="action">Régistrate
							
						</button>
        			</div>
				{!! Form::close() !!}
			</div>
	    </div>
	  </div>
	</div>
	
</div>

@stop