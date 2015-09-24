@extends('aspirantes.admin_user')

@section('title')Mi Currículum @stop

@section('titleHeader')Mi Currículum @stop 

@section('content') 
	<div class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	      <div class="container"></div>
	    </div>
	    <div class="parallax"><img src="{!!asset('img/mi-curriculum.jpg')!!}" alt="Mi Curriculum"></div>
	</div>
	<section class="container">
	<br>
		{!!Form::open()!!}
			<div class="row card-panel">
				<h5 class="green-text">Datos Personales</h5>
				<div class="row">
					<div class="input-field col s6 m3 grey-text text-darken-2">
	          		{!! Form::text('name', null, ['class' => 'validate', 'required' => 'required'])	!!}
	     				{!! Form::label('name','Nombre')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2">
	          		{!! Form::text('a_paterno', null, ['class' => 'validate', 'required' => 'required'])	!!}
	     				{!! Form::label('a_paterno','Apellido Paterno')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2">
	          		{!! Form::text('a_materno', null, ['class' => 'validate', 'required' => 'required'])	!!}
	     				{!! Form::label('a_materno','Apellido Materno')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2 center">
	          		<div class="file-field input-field ">
					      <div class="btn green green-text text-lighten-4">
					        <span >Subir Imagen<i class="material-icons right">account_circle</i></span>
					        <input type="file" />
					      </div>
					      <input class="file-path validate" type="text"/>
					   </div>
	          	</div>
				</div>
				<div class="row">
					<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		<h6 class="">Fecha de Nacimiento</h6>
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('dia',array('1'=>'1','2'=>'2','3'=>'3'), null, ['placeholder' => 'Día'])!!}
		     				{!! Form::label('dia','Día')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2">
		          		{!!Form::select('mes',array('1'=>'Enero','2'=>'Febrero','3'=>'Marzo'), null, ['placeholder' => 'Mes'])!!}
		     				{!! Form::label('mes','Mes')!!}
		          	</div>
		          	<div class="input-field col s6 m3 grey-text text-darken-2 center">
		          		{!!Form::select('anio',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Año'])!!}
		     				{!! Form::label('anio','Año')!!}
		          	</div>
				</div>
				<div class="row">
					<div class="input-field col s6 m3 grey-text text-darken-2 center">
	          		{!!Form::select('genero',array('1'=>'Masculino','2'=>'Femenino'), null, ['placeholder' => 'Genero'])!!}
	     				{!! Form::label('genero','Genero')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2">
	          		{!!Form::select('estado_civil',array('1'=>'Soltero','2'=>'Casado','3'=>'Divorciado','4'=>'Union Libre'), null, ['placeholder' => 'Estado Civil'])!!}
	     				{!! Form::label('estado_civil','Estado Civil')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2">
	          		{!!Form::text('rfc', null, ['class' => 'validate', 'required' => 'required'])!!}
	     				{!! Form::label('rfc','RFC')!!}
	          	</div>
	          	<div class="input-field col s6 m3 grey-text text-darken-2 center">
	          		{!!Form::text('curp', null, ['class' => 'validate', 'required' => 'required'])!!}
	     				{!! Form::label('curp','CURP')!!}
	          	</div>
				</div>
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
	          		{!!Form::text('ciudad', null, ['class' => 'validate', 'required' => 'required'])!!}
	     				{!! Form::label('ciudad','Ciudad')!!}
	          	</div>
	         </div>
	          	<div class="row">
	          		<div class="col s12 m7">
	          				<div class="input-field col s8 grey-text text-darken-2">
			          			{!! Form::text('calle', null, ['class' => 'validate', 'required' => 'required'])	!!}
			     					{!! Form::label('calle','Calle')!!}
			          		</div>
			          		<div class="input-field col s2 grey-text text-darken-2">
			          			{!! Form::text('no_ext', null, ['class' => 'validate', 'required' => 'required'])	!!}
			     					{!! Form::label('no_ext','No. Ext.')!!}
			          		</div>
			          		<div class="input-field col s2 grey-text text-darken-2">
			          			{!! Form::text('no_int', null, ['class' => 'validate', 'required' => 'required'])	!!}
			     					{!! Form::label('no_int','No. Int.')!!}
			          		</div>
	          		</div>
		          	<div class="col s12 m5">
		          		<div class="input-field col s6 grey-text text-darken-2">
		          			{!! Form::text('colonia', null, ['class' => 'validate', 'required' => 'required'])	!!}
		          			{!! Form::label('colonia','Colonia')!!}
		          		</div>
		          		<div class="input-field col s6 grey-text text-darken-2">
		          			{!! Form::text('codigo_postal', null, ['class' => 'validate', 'required' => 'required'])	!!}
		          			{!! Form::label('codigo_postal','Código Postal ')!!}
		          		</div>
		          	</div>
	          	</div>
	          	<div class="row">
	          		<div class="input-field  col s6 m3 grey-text text-darken-2 ">
							{!!Form::select('telefono1',array('celular'=>'Celular','fijo'=>'Fijo','oficina'=>'Oficina'), null, ['placeholder' => 'Tipo de Telefono', 'class' => 'validate'])!!}
							<label for="telefono1"><i class="material-icons red-text text-lighten-2 tiny">star</i>Tipo de Telefono</label>
						</div>
						<div class="input-field col s6 m3 grey-text text-darken-2">
							{!! Form::text('txt_telefono1', null, ['class' => 'validate'])	!!}
							<label for="txt_telefono1"><i class="material-icons red-text text-lighten-2 tiny">star</i>Numero</label>
						</div>
						<div class="input-field  col s6 m3 grey-text text-darken-2">
							{!!Form::select('telefono2',array('celular'=>'Celular','fijo'=>'Fijo','oficina'=>'Oficina'), null, ['placeholder' => 'Tipo de Telefono'])!!}
            				{!!	Form::label('telefono2','Tipo de Telefono')!!}
						</div>
						<div class="input-field col s6 m3 grey-text text-darken-2">
							{!! Form::text('txt_telefono2', null, ['class' => 'validate'])	!!}
							{!!	Form::label('txt_telefono2','Numero')	!!}
						</div>
	          	</div>
	          	<div class="row">
	          		<div class="col s12 m4 l5 ">
          				<div class="col s12 m12 l7">
          					<h6 class="grey-text text-darken-2 center">Licencia de Conducir</h6>
          				</div>
          				<div class="col s12 m12 l5 center">
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
	          		<div class="col s12 m8 l7">
	          			<div class="col s3">
	          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo1"  checked/>
      						<label for="tipo1">Tipo A</label>
	          			</div>
	          			<div class="col s3">
	          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo2" />
      						<label for="tipo2">Tipo B</label>
	          			</div>
	          			<div class="col s3">
	          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo3" />
      						<label for="tipo3">Tipo C</label>
	          			</div>
	          			<div class="col s3">
	          				<input class="with-gap" name="tipo_lic" type="radio" id="tipo4" />
      						<label for="tipo4">Tipo D</label>
	          			</div>
	          		</div>
	          	</div>
	          	<div class="row">
	          		<div class="col s12 m6">
          				<div class="col s12 m12 l8">
          					<h6 class="grey-text text-darken-2 center">Dispone de Vehículo propio</h6>
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
          					<h6 class="grey-text text-darken-2 center">Discapacidad</h6>
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
			</div>
			<!-- #### Termina Datos Personales ####-->


			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Datos Academicos <i class="material-icons left">school</i></h5>
					<div class="input-field  col s12 m6 grey-text text-darken-2 ">
						{!!Form::select('max_studio',array('1'=>'Secundaria','2'=>'Bachillerato','3'=>'Estudios Universitarios sin Terminar'), null, ['placeholder' => 'Máximo Nivel de Estudios', 'class' => 'validate'])!!}
						<label for="max_studio"><i class="material-icons red-text text-lighten-2 tiny">star</i>Máximo Nivel de Estudios</label>
					</div>
					<div class="input-field col s12 m6 grey-text text-darken-2">
						{!! Form::text('institucion', null, ['class' => 'validate'])	!!}
						<label for="institucion"><i class="material-icons red-text text-lighten-2 tiny">star</i>Nombre de Institución</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m4 l6 ">
						<div class="col s12 m12 l8">
       						<h6 class="grey-text text-darken-2 center">¿Estudias Actualmente?</h6>
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
					<div class="input-field  col s6 m4 l2 grey-text text-darken-2 ">
						{!!Form::select('anio_start',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Año de Inicio', 'class' => 'validate'])!!}
						<label for="anio_start"><i class="material-icons red-text text-lighten-2 tiny">star</i>Año de Inicio</label>
					</div>
					<div class="input-field  col s6 m4 l2 grey-text text-darken-2 ">
						{!!Form::select('anio_fin',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Año de Termino', 'class' => 'validate'])!!}
						<label for="anio_fin"><i class="material-icons red-text text-lighten-2 tiny">star</i>Año de Termino</label>
					</div>
					<div class="col s12">
						<h6 class="grey-text text-darken-2">Datos academicos Extras </h6>
						<div class="col s12 m11 offset-m1">
							<a id="addAcademy" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i> Agregar</a>
						</div>
					</div>
					<div id="descripAcademy" class="col s12 m10 offset-m1 valign-wrapper">
						<div class="input-field col s4 m3  grey-text text-darken-2 ">
	      				{!!Form::select('academy1',array('1'=>'Diplomado','2'=>'Certificado','3'=>'Curso'), null, ['placeholder' => 'Tipo de Título'])!!}
	      			</div>
		          	<div class="input-field col s6 m7 grey-text text-darken-2">
		          		{!!Form::text('ciudad', null, ['class' => 'validate', 'required' => 'required'])!!}
		          		<label for="ciudad"><i class="material-icons red-text text-lighten-2 tiny">star</i>Título</label>
		          	</div>
						<div class="col s1 m2 center">
							<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
						</div>
					</div>
				</div>	
			</div>
			<!-- #### Termina Datos Academicos #### -->


			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Idiomas <i class="material-icons left">language</i></h5>
					<div class="col s12 m11 offset-m1">
						<a id="addIdioma" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i> Agregar</a>
					</div>
				</div>
				<div class="row">
					<div id="descripAcademy" class="col s12 m10 offset-m1 ">
						<div class="input-field col s4 m3  grey-text text-darken-2 ">
	      				{!!Form::select('academy1',array('1'=>'Diplomado','2'=>'Certificado','3'=>'Curso'), null, ['placeholder' => 'Tipo de Título'])!!}
	      			</div>
		          	<div class="input-field col s6 m7 grey-text text-darken-2">
		          		{!!Form::text('ciudad', null, ['class' => 'validate', 'required' => 'required'])!!}
		          		<label for="ciudad"><i class="material-icons red-text text-lighten-2 tiny">star</i>Título</label>
		          	</div>
						<div class="col s1 m2 center">
						<br>
							<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
						</div>
					</div>
				</div>
			</div>
			<!-- #### Termina Idiomas #### -->


			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Perfil Profecional <i class="material-icons left small">person</i></h5>
					<div class="col s12 m10 offset-m1">
						<div class="input-field col s12 m7 grey-text text-darken-2">
		          		{!! Form::text('titCargo', null, ['class' => 'validate', 'required' => 'required'])	!!}
		     				{!! Form::label('titCargo','Cargo o título breve del currículum',['class'=>'grey-text text-darken-2'])!!}
		          	</div>
		          	<div class="input-field col s12 m5 grey-text text-darken-2">
		          		{!! Form::text('especialidad', null, ['class' => 'validate', 'required' => 'required'])	!!}
		     				{!! Form::label('especialidad','Especialidad', ['class'=>'grey-text text-darken-2'])!!}
		          	</div>
		          	<div class="input-field col s12">
				         <textarea id="des_Perfil" class="materialize-textarea"></textarea>
				         <label for="des_Perfil" class="grey-text text-darken-2">Descripción breve de su perfil profesional </label>
				      </div>
					</div>
				</div>
			</div>
			<!-- #### Termina Perfil Profecional #### -->


			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Asignación de Categorías<i class="material-icons left ">library_books</i></h5>
					<div class="col s12 m10 offset-m1">
						<p>Este modulo es muy importante, por que al asignarte a una categoria( ó categorías), las Empresas que están buscando Aspirantes podrán encontrarte de manera más eficiente.</p>
						<p class="center grey-text">Es obligatorio Agragar una Categoría como mínimo.</p>
						<div class="row">
							<div class="input-field col s6 m6 l5grey-text text-darken-2">
			      				{!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría'])!!}
			      				{!!	Form::label('categoria','Categoría')!!}
			      			</div>
			      			<div class="input-field col s6 m6 l4 grey-text text-darken-2">
			      				{!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía'])!!}
			      				{!!	Form::label('subcategoria','Subcategoía')!!}
			      			</div>
				          	<div class="input-field col s12 m12 l3 center">
						         <a id="addAsigCat" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i>Agregar</a>
						    </div>
						</div>
						<br>
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
			</div>
			<!-- #### Termina Asignación de Categorías #### -->

			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Experiencia Profecional <i class="material-icons left ">work</i></h5>
					<div class="col s12 m12 l6 ">
						<div class="col s12 m12 l8">
       						<h6 class="grey-text text-darken-2 center">Experiencia Laboral</h6>
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
	          	<div class="row">
	          		<div class="input-field col s12 m7 grey-text text-darken-2">
		          		{!!Form::text('empresa_exp', null, ['class' => 'validate', 'required' => 'required'])!!}
		          		<label for="empresa_exp"><i class="material-icons red-text text-lighten-2 tiny">star</i>Empresa</label>
		          	</div>
	          		<div class="input-field col s6 m5 grey-text text-darken-2">
	          			{!!Form::text('puesto', null, ['class' => 'validate', 'required' => 'required'])!!}
	          			<label for="puesto"><i class="material-icons red-text text-lighten-2 tiny">star</i>Puesto</label>
	          		</div>
	        
	          		<div class="input-field  col s6 grey-text text-darken-2">
	          			{!!Form::select('giro_empresa',array('1'=>'Alimentos y Bebidas','2'=>'Construción e Inmobiliaria','3'=>'Explotación de Recursos Forestales'), null, ['placeholder' => 'Giro Empresarial', 'class' => 'validate'])!!}
	          			<label for="giro_empresa"><i class="material-icons red-text text-lighten-2 tiny">star</i>Giro Empresarial</label>
	          		</div>
	          		<!--  **** -->
	          		<div class="input-field  col s6 m3 grey-text text-darken-2 ">
	          			<div class="col s6">
	          				{!!Form::select('mesPeriodoStar',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Mes', 'class' => 'validate'])!!}
	          				<label for="anio_fin"><i class="material-icons red-text text-lighten-2 tiny">star</i>Periodo Inicio</label>
	          			</div>
	          			<div class="col s6">
	          				{!!Form::select('anioPeriodoStar',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Año', 'class' => 'validate'])!!}
	          			</div>
	          		</div>
	          		<div class="input-field  col s6 m3 grey-text text-darken-2 ">
	          			<div class="col s6">
	          				{!!Form::select('mesPeriodoEnd',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Mes', 'class' => 'validate'])!!}
	          				<label for="anio_fin"><i class="material-icons red-text text-lighten-2 tiny">star</i>Periodo Fin</label>
	          			</div>
	          			<div class="col s6">
	          				{!!Form::select('anioPeriodoEnd',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Año', 'class' => 'validate'])!!}
	          			</div>
	          		</div>

	          	</div>
	          	<div class="row">
	          		<div class="input-field col s12 m6 grey-text text-darken-2">
	          			{!!Form::text('referencia', null, ['class' => 'validate', 'required' => 'required'])!!}
	          			<label for="referencia"><i class="material-icons red-text text-lighten-2 tiny">star</i>Referencia</label>
	          		</div>
	          		<div class="input-field col s6 m3 grey-text text-darken-2">
	          			{!!Form::text('puesto', null, ['class' => 'validate', 'required' => 'required'])!!}
	          			<label for="puesto"><i class="material-icons red-text text-lighten-2 tiny">star</i>Puesto</label>
	          		</div>
	          		<div class="input-field col s6 m3 grey-text text-darken-2">
	          			{!!Form::text('tel_experien', null, ['class' => 'validate', 'required' => 'required'])!!}
	          			<label for="tel_experien"><i class="material-icons red-text text-lighten-2 tiny">star</i>Telefono</label>
	          		</div>
	          	</div>
	          	<div class="row">
	          		<div class="input-field col s12 m6 grey-text text-darken-2">
							{!! Form::email('email', null, ['class' => 'validate'])	!!}
							<label for="email"><i class="material-icons red-text text-lighten-2 tiny">star</i>Correo Electronico</label>
						</div>
						<div class="input-field  col s12 m6 grey-text text-darken-2">
							<textarea id="descripcion" class="materialize-textarea" length="220"></textarea>
		          			<label for="descripcion">Descripción de Actividades que Realizaba </label>
						</div>
	          	</div>
	          	<div class="col s12 center">
	          			<a id="addExperiencia" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i>Agregar</a>
	          	</div>
					 <br><br><br>
	          	<div id="boxExperiencia" class="row">
	          		<div id="expedesc" class="col s12 m10 offset-m1 valign-wrapper">
	          			<div class="col s5 m4">
	          				<p><strong>Empresa: </strong><span class="grey-text text-darken-1">Grupo Chula Vista</span></p>
	          				<p><strong>Periodo: </strong><span class="grey-text text-darken-1">Sep 2014 - Jul 2015</span></p>
	          				<p><strong>Referencia: </strong><span class="grey-text text-darken-1">Emilio Buena Suerte</span></p>
	          				<h6 class="grey-text text-darken-1">Gerente Gerenal &nbsp;&nbsp; (614) 5 55 55 </h6>
	          				<h6 class="grey-text text-darken-1">buena@chulavista.com</h6>
	          			</div>
	          			<div class="col s5 m6">
	          				<h6>Descripción de Actividades que Realizaba </h6>
	          				<p class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur debitis blanditiis, doloribus optio officiis ipsum.</p>
	          			</div>
	          			<div class="col s1 m2 center">
	          				<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
	          			</div>
	          		</div>
	          	</div>
				</div>
			</div>
			<!-- #### Termina Experiencia Profecional #### -->
			

			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Ofimática<i class="material-icons left small">keyboard</i></h5>
					<div class="col s12 m10 offset-m1">
						<p class="center">Es obligatorio Agragar una Programa como mínimo.</p>
						<div class="row">
							<div class="input-field col s12 m6 grey-text text-darken-2">
			      				{!!Form::select('ofimatica',array('1'=>'Office','2'=>'Libre Office','3'=>'Star Office'), null, ['placeholder' => 'Elige un Programa'])!!}
			      				{!!	Form::label('ofimatica','Programa')!!}
			      			</div>
				          	<div class="input-field col s12 m6 center">
						         <a id="addAsigCat" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i>Agregar</a>
						    </div>
						</div>
						<br>
						<div id="cajaAsignacion" class="row">
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Libre Office</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Michosoft Excel</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Microsoft PowerPoint</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
			<!-- #### Termina Ofimática #### -->


			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Otro Software que Utilizas<i class="material-icons left small">laptop_mac</i></h5>
					<div class="col s12 m10 offset-m1">
						<p class="center">Es obligatorio Agragar una Programa como mínimo.</p>
						<div class="row">
							<div class="col s12">
								<div class="input-field col s12 m6 grey-text text-darken-2">
			      				{!!Form::select('ofimatica',array('1'=>'Office','2'=>'Libre Office','3'=>'Star Office'), null, ['placeholder' => 'Elige un Programa'])!!}
			      				{!!	Form::label('ofimatica','Programa')!!}
			      			</div>
				          	<div class="input-field col s12 m6 center">
						         <a id="addAsigCat" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i>Agregar</a>
						    	</div>
							</div>
						</div>
						<br>
						<div id="cajaAsignacion" class="row">
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Libre Office</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Michosoft Excel</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
							<article class="col s12 ">
								<div class="col s10 borde-bottom ">
									<h6 class="grey-text">Microsoft PowerPoint</h6>
								</div>
								<div class="col s2 center">
									<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
			<!-- #### Termina Otro Software que Utilizas #### -->

			<div class="row card-panel">
				<div class="row">
					<h5 class="green-text">Habilidades<i class="material-icons left ">work</i></h5>
	          	<div class="row">
	          		<div class="col s12 m10 offset-m1">
	          			<div class="input-field col s12 m6 grey-text text-darken-2">
			          		{!!Form::text('name_habili', null, ['class' => 'validate', 'required' => 'required'])!!}
			          		<label for="name_habili"><i class="material-icons red-text text-lighten-2 tiny">star</i>Nombre del Conocimiento</label>
			          	</div>
	          			<div class="input-field  col s12 m6 grey-text text-darken-2">
	          				{!!Form::select('nive_habili',array('1'=>'Alimentos y Bebidas','2'=>'Construción e Inmobiliaria','3'=>'Nivel de Conocimiento'), null, ['placeholder' => 'Nivel de Conocimiento', 'class' => 'validate'])!!}
	          				<label for="nive_habili"><i class="material-icons red-text text-lighten-2 tiny">star</i>Nivel de Conocimiento</label>
	          			</div>	          				         
	          			<div class="row ">
	          				<div class="col s12 valign-wrapper">
	          					<div class="input-field  col s12 m6 grey-text text-darken-2 ">	          			
	          							{!!Form::select('mesPeriodoStar',array('1'=>'2015','2'=>'2014','3'=>'2013'), null, ['placeholder' => 'Años de Esperiencia ', 'class' => 'validate'])!!}
	          							<label for="anio_fin"><i class="material-icons red-text text-lighten-2 tiny">star</i>Años de Esperiencia </label>	          			
	          					</div>
						          	<div class="col s12 m6 center">
						          			<a id="addHabilidad" href="#!" class="waves-effect waves-light btn green"><i class="material-icons left">add_circle</i>Agregar</a>
						          	</div>
	          				</div>
	          			</div>
	          		</div>
	          	</div>
	          	<div id="boxExperiencia" class="row">
	          		<div id="expedesc" class="col s12 m10 offset-m1 valign-wrapper">
	          			<div class="col s12 m5 valign">
	          				<p>
	          					Manejo de lenguaje HTML5, PHP5, CSS3 y JavaScript, Responsive Web Design (Diseño Web Adaptable).
	          				</p>
	          			</div>
	          			<div class="col s4 m3 ">
	          				<p class="grey-text text-darken-1 center valign">Intermedio</p>
	          			</div>
	          			<div class="col s4 m2 ">
	          				<p class="grey-text text-darken-1 center valign">2 años</p>
	          			</div>
	          			<div class="col s4 m2 center valign">
	          				<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
	          			</div>
	          		</div>
	          	</div>
				</div>
			</div>
		   <div class="input-field col s12  grey-text text-darken-2 center">
		   <br>
				<button class="btn waves-effect waves-light  green rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
				</button>	
			<br>
			</div>
			<!-- #### Termina Habilidades  #### -->

		{!!Form::close()!!}
	</section>
@stop 	


@section('script')

@stop 