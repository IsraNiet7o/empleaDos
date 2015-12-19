@extends('company.admin_layout')

@section('title') Nueva Vacante  @stop 

@section('titleHeader')Postula tu Vacante @stop 

@section('content')
	<section class="container">
		<div class="card">
			<div class="card-content">
			{{--<div class="card-image">
              <img src="{!! asset('img/pos-vacante.jpg') !!}">
              <span class="card-title">Nueva Vacante</span>
            </div>--}}
				{!! Form::open() !!}
				<h3>Nueva Vacante</h3>
				<p class="grey-text">Crea tu vacante facilmente. Solo tiene que llenar el formulario y dar click en el boton de Pustular Vacante.</p>
				<div class="row">
					<div class="input-field col s12 m7  grey-text text-darken-2">
						{!! Form::text('title', null, ['class' => 'validate', 'required'=>'required'])	!!}
						<label for="title">Titulo de la vacante</label>
					</div>
					<div class="input-field col s12 m5  grey-text text-darken-2">
						{!! Form::text('specialiti', null, ['class' => 'validate','required'=>'required'])	!!}
						<label for="specialiti">Especialidad Deseada</label>
					</div>
					<div class="row">
						<div class="input-field col s12 m5 grey-text text-darken-2">
						      {!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría','required'=>'true','name'=>'categoria'])!!}
						      {!!   Form::label('categoria','Categoría')!!}
						</div>
						<div class="input-field col s12 m5 grey-text text-darken-2">
						      {!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía','required'=>'required'])!!}
						      {!!   Form::label('subcategoria','Subcategoía')!!}
						</div>
						<div class="input-field col s2 m2">
							{!! Form::selectRange('number', 1, 20); !!}
							<label for="cantidadVacante">Cantidad de Vacantes</label>
						</div>
					</div>
					<div class="input-field  col s12 grey-text text-darken-2">
						{!! Form::textarea('descrip', null,['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Descripción Breve de la Empresa y desarrollo del puesto.','required'=>'required']) !!}
	          			<label for="descrip">Descripción</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m3">
						<h5>Requisitos <i class="material-icons left green-text">forward</i></h5>
					</div>
					<div class="input-field col s12 m5  grey-text text-darken-2">
						{!! Form::text('requisito', null, ['class' => ''])	!!}
						<label for="specialiti">Requisito</label>
					</div>
					<div class="input-field col s12 m4">
						<button class="btn waves-effect waves-light green center z-depth-2" type="button" name="action">Agregar
								<i class="material-icons left">add_box</i>
						</button>
					</div>
					<div class="col s12">
						<div id="requiagre">
							<div class="col s10 m7 offset-m3 borde-bottom">
								<div class="col s10 m9">
									<p>2 años de Experiencia</p>
								</div>
								<div class="col s2 m3 right-align">
									<button class="btn btn-floating waves-effect waves-light red " type="button" name="action">
									<i class="material-icons white-text">delete</i>
									</button>
								</div>
							</div>
							<div class="col s10 m7 offset-m3 borde-bottom">
								<div class="col s10 m9">
									<p>2 años de Experiencia</p>
								</div>
								<div class="col s2 m3 right-align">
									<button class="btn btn-floating waves-effect waves-light red " type="button" name="action">
									<i class="material-icons white-text">delete</i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>			
				<div class="row">
					<div class="col s12 m3">
						<h5>Beneficios <i class="material-icons left green-text">forward</i></h5>
					</div>
					<div class="input-field col s12 m5  grey-text text-darken-2">
						{!! Form::text('requisito', null, ['class' => ''])	!!}
						<label for="specialiti">Requisito</label>
					</div>
					<div class="input-field col s12 m4">
						<button class="btn waves-effect waves-light green center z-depth-2" type="button" name="action">Agregar
								<i class="material-icons left">add_box</i>
						</button>
					</div>
					<div class="col s12">
						<div id="requiagre">
							<div class="col s10 m7 offset-m3 borde-bottom">
								<div class="col s10 m9">
									<p>2 años de Experiencia</p>
								</div>
								<div class="col s2 m3 right-align">
									<button class="btn btn-floating waves-effect waves-light red " type="button" name="action">
									<i class="material-icons white-text">delete</i>
									</button>
								</div>
							</div>
							<div class="col s10 m7 offset-m3 borde-bottom">
								<div class="col s10 m9">
									<p>2 años de Experiencia</p>
								</div>
								<div class="col s2 m3 right-align">
									<button class="btn btn-floating waves-effect waves-light red " type="button" name="action">
									<i class="material-icons white-text">delete</i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>			
				<div class="row">
					<h5>Tipo de contratación</h5>
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" class="filled-in validate" value="prac-middle-time" id="prac-middle-time" required/>
					      <label for="prac-middle-time">Practicante medio Tiempo</label>
					   </p>
					</div>
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" value="prac-full-time" class="filled-in"  id="prac-full-time"/>
					      <label for="prac-full-time">Practicante Tiempo Completo</label>
					   </p>
					</div>
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" value="full-time" class="filled-in" id="full-time"/>
					      <label for="full-time">Tiempo Completo</label>
					   </p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" value="middle-time" class="filled-in" id="middle-time" />
					      <label for="middle-time">Medio Tiempo</label>
					   </p>
					</div>
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" value="permanent" class="filled-in" id="permanent"/>
					      <label for="permanent">Permanente</label>
					   </p>
					</div>
					<div class="input-field col s12 m4">
						<p>
					      <input type="radio" name="tipy-contract" value="fee" class="filled-in" id="fee"/>
					      <label for="fee">Honorarios</label>
					   </p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m4">
						<p>
					      <input type="checkbox" name="publicarvacante" class="filled-in" id="publicarvacante"/>
					      <label for="publicarvacante" class="black-text">Publicar el Sueldo de la Vacante</label>
					   </p>
					</div>
					<div class="input-field col s12 m4">
						{!! Form::text('suldo_inicial', null,['class'=>'materialize-textarea']) !!}
	          		<label for="suldo_inicial">Sueldo Minimo</label>
					</div>
					<div class="input-field col s12 m4">
						{!! Form::text('suldo_maximo', null,['class'=>'materialize-textarea']) !!}
	          		<label for="suldo_maximo">Sueldo Máximo</label>
					</div>
				</div>
				<div class="divider"></div>
				<div class="row">
					<div class="col s12 m6">
						<div class="input-field col s12 m6">
							<label class="black-text">Disponivilidad para Viaja</label>
						</div>
						<div class="input-field col s12 m3">
							<p>
						      <input type="radio" name="viajar" value="true" class="filled-in" id="viajatrue"/>
						      <label for="viajatrue">Si</label>
						   </p>
						</div>
				   	<div class="input-field col s12 m3">
				   		<p>
					         <input type="radio" name="viajar" value="false" class="filled-in" id="viajafalse"/>
					         <label for="viajafalse">No</label>
					      </p>
				   	</div>
					</div>
					<div class="col s12 m6">
						<div class="input-field col s12 m6">
							<label class="black-text">Disponivilidad para cambio de Residencia</label>
						</div>
						<div class="input-field col s12 m3">
							<p>
						      <input type="radio" name="recidencia" value="true" class="filled-in" id="residentrue"/>
						      <label for="residentrue">Si</label>
						   </p>
						</div>
				   	<div class="input-field col s12 m3">
				   		<p>
					         <input type="radio" name="recidencia" value="false" class="filled-in" id="residenfalse"/>
					         <label for="residenfalse">No</label>
					      </p>
				   	</div>
					</div>
				</div>
				<br>
				<div class="divider"></div>
				<br>
				<div class="row">
					<div class="input-field col s6 m3  grey-text text-darken-2 ">
      				{!!Form::select('pais',array('1'=>'México','2'=>'Venesuela','3'=>'Colombia'), null, ['placeholder' => 'País'])!!}
      				{!!	Form::label('pais','País')!!}
      			</div>
	          	<div class="input-field col s6 m4  grey-text text-darken-2 ">
      				{!!Form::select('Estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige un Estado'])!!}
      				{!!	Form::label('Estado','Estado')!!}
      			</div>
	          	<div class="input-field col s12 m4 grey-text text-darken-2">
	          		{!!Form::select('ciudad',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige una Ciudad'])!!}
	     				{!! Form::label('ciudad','Ciudad')!!}
	          	</div>
				</div>
				

				<div class="row">
					<div class="input-field col s12">
						{!! Form::textarea('comfinal', null,['class'=>'materialize-textarea','length'=>'1000','placeholder'=>'Comentario Final']) !!}
	          		<label for="comfinal">Comentario Final</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<p>
					      <input type="checkbox" id="mostrarDatos" name="mostrarDatos" value="true" />
					      <label for="mostrarDatos">Mostrar Datos de Empresa.</label>
					    </p>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 center-align">
						<button class="btn waves-effect waves-light green darken-2 btn-large center" type="submit" name="action">Postular Vacante
								<i class="material-icons left">cloud_upload</i>
						</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>{{-- Temina Card-content  --}}
		</div>
	</section>
@stop

@section('script')
	{!! Html::script('js/querys/vacante.js') !!}
@stop 