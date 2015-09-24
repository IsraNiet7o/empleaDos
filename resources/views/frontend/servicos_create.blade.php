@extends('aspirantes.admin_user')

@section('title')Crear Un Servicio @stop 
@section('titleHeader')Servicios Profecionales @stop

@section('content')
	<div class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	      <div class="container"></div>
	    </div>
	    <div class="parallax"><img src="{!!asset('img/mis-servicios.jpg')!!}" alt="Mi Curriculum"></div>
	</div>
	<section class="container">
		{!!Form::open(['name'=>'FormServi','id'=>'FormServi'])!!}
		<div class="row card-panel">
			<h5 class="green-text">Publicar Servicio </h5>
			<div class="col s12 m10 offset-m1">
				<div class="row">
					<div class="input-field col s12 m10 l8 grey-text text-darken-2">
	          		{!! Form::text('titulo', null, ['class' => 'validate', 'required' => 'required'])	!!}
	     				{!! Form::label('titulo','Título')!!}
	          	</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m5 l4 grey-text text-darken-2">
	          		{!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría'])!!}
	          		{!!	Form::label('categoria','Categoría')!!}
	          	</div>
	          	<div class="input-field col s12 m5 l4 grey-text text-darken-2">
	          		{!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía', 'required'=>'required'])!!}
	          		{!!	Form::label('subcategoria','Subcategoía')!!}
	          	</div>
	          	<div class="input-field  col s12 grey-text text-darken-2">
						<textarea id="descripcion" class="materialize-textarea" required></textarea>
	          		<label for="descripcion">Descripción</label>
					</div>
					<div class="row">
						<div class="col s12 m6">
							<div class="file-field input-field col s10 offset-s1">
							      <div class="btn lime green-text">
							        <input type="file" name="file[]" id="inputFile" required />
							        <span>Subir  <i class="material-icons right">photo_library</i></span>
							      </div>
							      <input class="file-path validate" type="text"/>
							   </div>
						</div>
						<div class="col s12 m6 center">
							<div id="muestraimg" class="center">
								<h6 class="valign grey-text lighten-2">
									Sube una imagen referente a tu servicio, que no pese mas de 500kb!
								</h6>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col s3">
          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo1"  checked/>
   						<label for="tipo1">Privado <a class="btn btn-floating green lighten-4" onclick="Materialize.toast('Solo podrá ser visto por Usuarios y Empresas REGISTRADAS', 4000)"><i class="material-icons green-text">warning</i></a></label>
          			</div>
          			<div class="col s3">
          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo2" />
   						<label for="tipo2">Público <a class="btn btn-floating green lighten-4" onclick="Materialize.toast('Tu Servicio podrá ser visto por todos los Usuarios y Empresas', 4000)"><i class="material-icons green-text">warning</i></a></label>
          			</div>
						<div class="input-field col s6  grey-text text-darken-2  center">
	      				<button class="btn  waves-effect waves-light  green rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
							</button>	
	      			</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop 



@section('script')
	{!!Html::script('js/querys/servi.js')!!}
@stop


