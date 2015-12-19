@extends('company.admin_layout')

@section('title') Datos de Compañia  @stop 

@section('titleHeader')Actualiza tus Datos  @stop 

@section('content')
<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
			<div class="row">
				<div class="col s12">
					<h3 class="center green-text text-lighten-2">Datos de la Empresa </h3>
				</div>
			</div>
      </div>
    </div>
    <div class="parallax"><img src="{!!asset('img/mi-data.jpg')!!}" alt="Mi Curriculum"></div>
</div>
	<section class="container">
				{!! Form::open() !!}
			<section class="card">
				<div class="row">
					<div class="col s10 offset-s1">
						<div class="input-field col s12 grey-text text-darken-2">
							{!! Form::text('nombre_company', null, ['class' => 'validate'])	!!}
							<label for="nombre_company">Nombre de la Empresa</label>
						</div>
						<div class="input-field col s12 grey-text text-darken-2">
							{!! Form::text('razon_social', null, ['class' => 'validate'])	!!}
							<label for="razon_social">Razón Social</label>		
						</div>
						<div class="input-field  col s12 m6  grey-text text-darken-2 ">
							{!! Form::text('rfc', null, ['class' => 'validate'])	!!}
							<label for="rfc">RFC</label>
						</div>
						<div class="input-field  col s12 m6 grey-text text-darken-2">
							{!!Form::select('giro_empresa',array('1'=>'Alimentos y Bebidas','2'=>'Construción e Inmobiliaria','3'=>'Explotación de Recursos Forestales'), null, ['placeholder' => 'Giro Empresarial', 'class' => 'validate'])!!}
							<label for="giro_empresa">Giro Empresarial</label>
						</div>
						<div class="input-field  col s12 m4 grey-text text-darken-2">
							{!!Form::select('pais',array('1'=>'México','2'=>'Venesuela','3'=>'Colombia'), null, ['placeholder' => 'País', 'class' => 'validate'])!!}
							<label for="pais">País</label>
						</div>
						<div class="input-field  col s12 m4 grey-text text-darken-2">
							{!!Form::select('estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Estado', 'class' => 'validate'])!!}
							<label for="estado">Estado</label>
						</div>
						<div class="input-field  col s12 m4 grey-text text-darken-2">
							{!! Form::text('ciudad', null, ['class' => 'validate'])	!!}
							<label for="ciudad">Ciudad</label>
						</div>
						<div class="input-field  col s12 grey-text text-darken-2">
							{!! Form::text('direccion', null, ['class' => 'validate'])	!!}
							<label for="direccion">Dirección</label>
							
						</div> 
						<div class="input-field  col s12 grey-text text-darken-2">
							<textarea id="descripcion" class="materialize-textarea" length="150"></textarea>
		          			<label for="descripcion">Descripción</label>
						</div>
						<div class="row">
							<div class="col s12 m6">
								<div class="input-field  col s12 grey-text text-darken-2">
									{!! Form::text('pagina_web', null,array('lenght' => '120'))	!!}
									{!!	Form::label('pagina_web','Página Web de la Empresa')	!!}
								</div>
								<div class="input-field  col s12 grey-text text-darken-2">
									<div class="file-field input-field">
										<input class="file-path validate" type="text"/>
							      <div class="btn lime green-text tooltipped data-position="top"  data-delay="50" data-tooltip="Sube el Logo de tu Empresa en Formato jpg/png Peso Máximo 500kb"">
							        <span>Subir logo de Empresa <i class="material-icons medium ico-aling">backup</i></span>
							        <input type="file" />
							      </div>
							    </div>
								</div>
							</div>
							<div class="col s12 m6">
								<label for="tipo_empresa">Tipo de Empresa</label>
								<p>
						      <input name="group1" type="radio" id="check1" checked="checked" />
						      <label for="check1">Empleado Directo</label>
						    </p>
						    <p>
						      <input name="group1" type="radio" id="check2"  />
						      <label for="check2">Servicios Temporales</label>
						    </p>
						    <p>
						      <input name="group1" type="radio" id="check3"  />
						      <label for="check3">De Reclutamiento</label>
						    </p>
							</div>
						</div>
				</div>
			</section>
			
			<div class="divider"></div>

			<section>
				<div class="row">
					<div class="col s12 m6 offset-m3">
						<div class="input-field col s12 center">
		  				{!!Form::checkbox('name', 'value')!!}
							<input type="checkbox" id="test5" />
					
		  				</div>
			  			<div class="input-field col s12 grey-text text-darken-2 center">
			  				<button class="btn waves-effect waves-light green darken-2 btn-large center" type="submit" name="action">Actualizar
								<i class="material-icons left">mode_edit</i>
								</button>
			  			</div>
					</div>
				</div>
			</section>
			{!! Form::close() !!}
	</section>
@endsection