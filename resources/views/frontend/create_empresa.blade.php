@extends('layouts.principal')

@section('title')
	¿Como Postular?
@stop

@section('content')

<section class="container">
	<h3 class="green-text text-darken-2">Registra Gratis tu Empresa <i class="material-icons small ico-aling">business</i></h3>
	<p class="grey-text text-darken-2 paging">Selecciona ahora <strong>entre los mejores perfiles que postulan directamente a tus vacantes</strong> o busca entre más de 1 millón de currículums publicados. En este portal hacemos que tu proceso de selección sea rápido y efectivo.
 </p>
		{!! Form::open() !!}
	<section>
		<div class="row">
			<div class="col s10 offset-s1">
				<h5 class="center">Datos de Acceso</h5>
				<div class="input-field col s12 l6 grey-text text-darken-2">
					{!! Form::email('email', null, ['class' => 'validate'])	!!}
					<label for="email"><i class="material-icons red-text text-lighten-2 tiny">star</i>Correo Electronico</label>
				</div>
				<div class="input-field col s12 l6 grey-text text-darken-2">
					{!! Form::email('confir_email', null, ['class' => 'validate'])	!!}
					<label for="confir_email"><i class="material-icons red-text text-lighten-2 tiny">star</i>Confirmar Correo Electronico</label>
				</div>
				<div class="input-field  col s6  grey-text text-darken-2 ">
					{!! Form::password('password',['class' => 'validate'])	!!}
					<label for="password"><i class="material-icons red-text text-lighten-2 tiny">star</i>Contraseña</label>
				</div>
				<div class="input-field  col s6 grey-text text-darken-2">
					{!! Form::password('password_confirm',['class' => 'validate'])	!!}
					<label for="password_confirm"><i class="material-icons red-text text-lighten-2 tiny">star</i>Confirmar Contraseña</label>
				</div>
			</div>
		</div>
	</section>
	
	<div class="divider"></div>

	<section>
		<div class="row">
			<div class="col s10 offset-s1">
				<h5 class="center">Datos de Contacto</h5>
				<div class="row">
					<div class="col s12 m6">
						<div class="input-field col s12  grey-text text-darken-2">
							{!! Form::text('contacto_empresa', null, ['class' => 'validate'])	!!}
							<label for="contacto_empresa"><i class="material-icons red-text text-lighten-2 tiny">star</i>Nombre Completo</label>
						</div>
						<div class="input-field col s12  grey-text text-darken-2">
							{!! Form::text('cargo_contacto', null, ['class' => 'validate'])	!!}
							<label for="cargo_contacto"><i class="material-icons red-text text-lighten-2 tiny">star</i>Cargo en la Empresa</label>
						</div>
						<div class="input-field col s12 grey-text text-darken-2">
							{!! Form::email('email_contacto', null, ['class' => 'validate'])	!!}
							<label for="email_contacto"><i class="material-icons red-text text-lighten-2 tiny">star</i>Correo Electronico</label>
					</div>
						<div class="input-field  col s6  grey-text text-darken-2 ">
							{!!Form::select('telefono1',array('celular'=>'Celular','fijo'=>'Fijo','oficina'=>'Oficina'), null, ['placeholder' => 'Tipo de Telefono', 'class' => 'validate'])!!}
							<label for="telefono1"><i class="material-icons red-text text-lighten-2 tiny">star</i>Tipo de Telefono</label>
						</div>
						<div class="input-field col s6 grey-text text-darken-2">
							{!! Form::text('txt_telefono1', null, ['class' => 'validate'])	!!}
							<label for="txt_telefono1"><i class="material-icons red-text text-lighten-2 tiny">star</i>Numero</label>
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
					<div class="col s12 m6">
						  <div class="slider mi-slider">
						    <ul class="slides">
						      <li>
						      	<img src="{!!asset('img/img-registro-empresa.jpg')!!}" alt="" class="responsive-img">
						        <div class="caption left-align">
						          <h3 class="green-text">Recuerda!</h3>
						          <h5 class="light grey-text text-darken-3">Here's our small slogan.</h5>
						        </div>
						      </li>
						      <li>
						     		<img src="{!!asset('img/img-registro-empresa2.jpg')!!}" alt="" class="responsive-img">
						        <div class="caption right-align">
						          <h3 class="lime-text">Right Aligned Caption</h3>
						          <h5 class="light grey-text text-darken-1">Here's our small slogan.</h5>
						        </div>
						      </li>
						      <li>
						       	<img src="{!!asset('img/img-registro-empresa3.jpg')!!}" alt="" class="responsive-img">
						        <div class="caption center-align">
						          <h3 class="green-text">This is our big Tagline!</h3>
						          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
						        </div>
						      </li>
						    </ul>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="divider"></div>
	<section>
		<div class="row">
			<div class="col s10 offset-s1">
				<h5 class="center">Datos de la Empresa</h5>
				<div class="input-field col s12 grey-text text-darken-2">
					{!! Form::text('nombre_company', null, ['class' => 'validate'])	!!}
					<label for="nombre_company"><i class="material-icons red-text text-lighten-2 tiny">star</i>Nombre de la Empresa</label>
				</div>
				<div class="input-field col s12 grey-text text-darken-2">
					{!! Form::text('razon_social', null, ['class' => 'validate'])	!!}
					<label for="razon_social"><i class="material-icons red-text text-lighten-2 tiny">star</i>Razón Social</label>		
				</div>
				<div class="input-field  col s12 m6  grey-text text-darken-2 ">
					{!! Form::text('rfc', null, ['class' => 'validate'])	!!}
					<label for="rfc"><i class="material-icons red-text text-lighten-2 tiny">star</i>RFC</label>
				</div>
				<div class="input-field  col s12 m6 grey-text text-darken-2">
					{!!Form::select('giro_empresa',array('1'=>'Alimentos y Bebidas','2'=>'Construción e Inmobiliaria','3'=>'Explotación de Recursos Forestales'), null, ['placeholder' => 'Giro Empresarial', 'class' => 'validate'])!!}
					<label for="giro_empresa"><i class="material-icons red-text text-lighten-2 tiny">star</i>Giro Empresarial</label>
				</div>
				<div class="input-field  col s12 m4 grey-text text-darken-2">
					{!!Form::select('pais',array('1'=>'México','2'=>'Venesuela','3'=>'Colombia'), null, ['placeholder' => 'País', 'class' => 'validate'])!!}
					<label for="pais"><i class="material-icons red-text text-lighten-2 tiny">star</i>País</label>
				</div>
				<div class="input-field  col s12 m4 grey-text text-darken-2">
					{!!Form::select('estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Estado', 'class' => 'validate'])!!}
					<label for="estado"><i class="material-icons red-text text-lighten-2 tiny">star</i>Estado</label>
				</div>
				<div class="input-field  col s12 m4 grey-text text-darken-2">
					{!! Form::text('ciudad', null, ['class' => 'validate'])	!!}
					<label for="ciudad"><i class="material-icons red-text text-lighten-2 tiny">star</i>Ciudad</label>
				</div>
				<div class="input-field  col s12 grey-text text-darken-2">
					{!! Form::text('direccion', null, ['class' => 'validate'])	!!}
					<label for="direccion"><i class="material-icons red-text text-lighten-2 tiny">star</i>Dirección</label>
					
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
			<div class="col s12 card grey  white-text">
			<br>
				<p>Online Career Center México, S.A.P.I de C.V., (el "Responsable") con domicilio en Autopista México Querétaro #3130 Piso 7, 700C, Colonia Valle Dorado, Tlalnepantla de Baz, Estado de México. C.P. 54020 es responsable de tratar sus datos personales (los "Datos") aquí recabados, con la finalidad de ofrecerle nuestros servicios de promoción laboral, así como promociones comerciales de bienes o servicios propios o de terceros que consideramos pueden ser de su interés.
				</p>
				<p>Para mayor información acerca del tratamiento de sus datos y de los derechos que puede hacer valer, usted puede acceder al aviso de privacidad completo disponible en: <a class="lime-text" href="#!">https://empleados/Ayuda/Aviso_Privacidad.</a></p>
				<br>
			</div>
			<div class="col s12">
				<h6 class="red-text text-lighten-3"><i class="material-icons ico-aling red-text text-lighten-2">star</i> Estos campos son requeridos. </h6>
			</div>
			<div class="col s12 m6 offset-m3">
				<div class="input-field col s12 center">
  				{!!Form::checkbox('name', 'value')!!}
					<input type="checkbox" id="test5" />
					<label for="test5" class="grey-text">He leído y acepto el Aviso de Privacidad.</label>
  			</div>
  			<div class="input-field col s12 grey-text text-darken-2 center">
  				<button class="btn waves-effect waves-light green darken-2 btn-large center" type="submit" name="action">Régistrate
				
					</button>
  			</div>
			</div>
		</div>
	</section>

		{!! Form::close() !!}
</section>
<br>
	<div class="divider"></div>
<br>

@stop 


@section('script')
	<script>
			$(document).ready(function(){
      $('.slider').slider();
      $('.tooltipped').tooltip({delay: 50});
      $('input#pagina_web, textarea#descripcion').characterCounter();
    });
	</script>
@stop