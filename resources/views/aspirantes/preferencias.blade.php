@extends('aspirantes.admin_user')

@section('title')Mis Preferencias  @stop
@section('titleHeader')Mis Preferencias @stop 

@section('content')
	<div class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	      <div class="container"></div>
	    </div>
	    <div class="parallax"><img src="{!!asset('img/mi-curriculum.jpg')!!}" alt="Mi Curriculum"></div>
	</div>
	<section class="container">
		{!!Form::open()!!}
			<div class="row card-panel">
				<h5 class="green-text">Preferencias</h5>
				<div class="col s12 m10 offset-m1">
					<div class="input-field col s6 m5 grey-text text-darken-2">
      				{!!Form::select('situcacion_ac',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Situación Actual'])!!}
      				{!!	Form::label('situcacion_ac','Categoría')!!}
      			</div>
      			<div class="input-field col s6 m7 grey-text text-darken-2">
	          		{!!Form::text('puesto_des', null, ['class' => 'validate', 'required' => 'required'])!!}
	          		<label for="puesto_des"><i class="material-icons red-text text-lighten-2 tiny">star</i>Puesto de Trabajo Deseado </label>
	          	</div>
					<div class="row">
						<div class="col s12 m4">
							<div class="input-field col s12 grey-text text-darken-2">
		      				{!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Área de Interes'])!!}
		      				{!!	Form::label('categoria','Seleccionar')!!}
		      			</div>
						</div>
						<div class="col s12 m8 offset-m4">
							<div id="cajaAsignacion" class="row">
								<article class="col s12 ">
									<div class="col s10 borde-bottom ">
										<h6 class="grey-text">Tecnologías de Información - Programacíon</h6>
									</div>
									<div class="col s2 center">
										<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
									</div>
								</article>
								<article class="col s12 ">
									<div class="col s10 borde-bottom ">
										<h6 class="grey-text">Tecnologías de Información - Soporte</h6>
									</div>
									<div class="col s2 center">
										<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
									</div>
								</article>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m4">
							<div class="input-field col s12 grey-text text-darken-2">
		      				{!!Form::select('Estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige un Estado'])!!}
	      				{!!	Form::label('Estado','Estado')!!}
		      			</div>
						</div>
						<div class="col s12 m8 offset-m4">
							<div id="cajaAsignacion" class="row">
								<article class="col s12 ">
									<div class="col s10 borde-bottom ">
										<h6 class="grey-text">Chihuahua</h6>
									</div>
									<div class="col s2 center">
										<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
									</div>
								</article>
								<article class="col s12 ">
									<div class="col s10 borde-bottom ">
										<h6 class="grey-text">Monterrey</h6>
									</div>
									<div class="col s2 center">
										<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
									</div>
								</article>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m6">
	          				<div class="col s12 m12 l8">
	          					<h6 class="grey-text text-darken-2 center">Disponibilidad para Viajar</h6>
	          				</div>
	          				<div class="col s12 m12 l4 center">
	          					<div class="switch">
								    	<label>
								      	No
								      	<input type="checkbox">
								      	<span class="lever"></span>
								      	si
								    	</label>
								  	</div>
	          				</div>
	          			</div>

	          		<div class="col s12 m6 ">
          				<div class="col s12 m12 l6">
          					<h6 class="grey-text text-darken-2 center">Disponibilidad para Cambiar de Residencia</h6>
          				</div>
          				<div class="col s12 m12 l6 center">
          					<div class="switch">
							    	<label>
							      	No
							      	<input type="checkbox">
							      	<span class="lever"></span>
							      	si
							    	</label>
							  	</div>
          				</div>
	          		</div>
					</div>
					<div class="row">
						<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		<h6 class="">Sueldo Requerido </h6>
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('cantidad',array('1'=>'$5,000 - $10,000','2'=>'$15,000 - $20,000','3'=>'$25,000 - $30,000'), null, ['placeholder' => 'Cantidad'])!!}
		     				{!! Form::label('cantidad','Cantidad')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('pesos',array('1'=>'Pesos- México','2'=>'Dollar- E.U.A'), null, ['placeholder' => 'Moneda'])!!}
		     				{!! Form::label('pesos','Moneda')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		{!!Form::select('por_canti',array('1'=>'Quincena','2'=>'Mensual','3'=>'Honorarios'), null, ['placeholder' => 'Por'])!!}
		     				{!! Form::label('por_canti','Por')!!}
		          	</div>
					</div>
					<div class="row">
						<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		<h6 class="">Sueldo Deseado</h6>
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('cantidad_deseada',array('1'=>'$5,000 - $10,000','2'=>'$15,000 - $20,000','3'=>'$25,000 - $30,000'), null, ['placeholder' => 'Cantidad'])!!}
		     				{!! Form::label('cantidad','Cantidad')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('pesos_deseados',array('1'=>'Pesos- México','2'=>'Dollar- E.U.A'), null, ['placeholder' => 'Moneda'])!!}
		     				{!! Form::label('pesos','Moneda')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		{!!Form::select('por_canti_deseada',array('1'=>'Quincena','2'=>'Mensual','3'=>'Honorarios'), null, ['placeholder' => 'Por'])!!}
		     				{!! Form::label('por_canti','Por')!!}
		          	</div>
					</div>
					<div class="input-field col s12  grey-text text-darken-2 center">
	      				<button class="btn waves-effect waves-light  green rto-mono-regularo btn-large" type="submit" name="action">Guardar Preferencias <i class="material-icons right small">save</i>
							    </button>	
	      			</div>
				</div>
			</div>	
		{!!Form::close()!!}
	</section>

@stop 

@section('script')

@stop