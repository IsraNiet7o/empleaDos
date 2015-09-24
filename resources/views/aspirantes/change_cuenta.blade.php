@extends('aspirantes.admin_user')

@section('title')Cuenta  @stop 

@section('titleHeader')Cuenta  @stop 
@section('content')
	
	<div class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	      <div class="container"></div>
	    </div>
	    <div class="parallax"><img src="{!!asset('img/mi-perfil.jpg')!!}" alt="Unsplashed background img 2"></div>
	 </div>
	<section class="container">
	<br>
		<div class="row">
			<div class="col s6 hoverable">
				<div class="col s6 offset-s3 center">
					<br>
					<i class="material-icons medium white green-text text-lighten-4">new_releases</i>
					<br>
				</div>
				<h3 class="green-text condensada-regular center">Cambio de Contraseña</h3>
		        <div class="row center">
		          {!!Form::open()!!}
		          	<div class="input-field col s6 offset-s3 grey-text text-darken-2">
		          		{!! Form::password('passold', null, ['class' => 'validate', 'required' => 'required'])	!!}
	        			{!!	Form::label('passold','Contraseña Actual')!!}
		          	</div>
		          	<div class="input-field col s6 offset-s3 grey-text text-darken-2">
		          		{!! Form::password('passnew', null, ['class' => 'validate', 'required' => 'required'])	!!}
	        			{!!	Form::label('passnew','Nueva Contraseña')!!}
		          	</div>
		          	<div class="input-field col s6 offset-s3 grey-text text-darken-2">
		          		{!! Form::password('passconfirm', null, ['class' => 'validate', 'required' => 'required'])	!!}
	        			{!!	Form::label('passconfirm','Confirmar Contraseña')!!}
		          	</div>
		          	<div class="input-field col s6 offset-s3  grey-text text-darken-2 center">
	        				<button class="btn waves-effect waves-light  green btn-large center z-depth-2" type="submit" name="action">Cambiar <i class="material-icons right">settings_backup_restore</i></button>
	        			</div>
		          {!!Form::close()!!}
		        </div>
			</div>
			<div class="col s6 hoverable">
				<div class="col s6 offset-s3 center">
					<br>
					<i class="material-icons medium green-text text-lighten-4">email</i>
					<br>
				</div>
				<h3 class="green-text condensada-regular center">Cambio de Email</h3>
					<div class="row center">
		          {!!Form::open()!!}
		          	<div class="input-field col s8 offset-s2 grey-text text-darken-2">
		          		{!! Form::email('email', null, ['class' => 'validate', 'required' => 'required'])	!!}
	        			{!!	Form::label('email','Email Actual')!!}
		          	</div>
		          	<div class="input-field col s8 offset-s2 grey-text text-darken-2">
		          		{!! Form::email('emailnew', null, ['class' => 'validate', 'required' => 'required'])!!}
	        			{!!	Form::label('emailnew','Nuevo Email')!!}
		          	</div>
		          	<div class="input-field col s8 offset-s2 grey-text text-darken-2">
		          		{!! Form::email('emailconfir', null, ['class' => 'validate', 'required' => 'required'])	!!}
	        			{!!	Form::label('emailconfir','Confirmar Email')!!}
		          	</div>
		          	<div class="input-field col s6 offset-s3  grey-text text-darken-2 center">
	        				<button class="btn waves-effect waves-light  green btn-large center z-depth-2" type="submit" name="action">Cambiar <i class="material-icons right">settings_backup_restore</i></button>
	        			</div>
		          {!!Form::close()!!}
		        	</div>
			</div>
		</div>
	</section>

</section>
@stop 