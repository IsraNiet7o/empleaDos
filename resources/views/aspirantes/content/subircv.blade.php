@extends('aspirantes.admin_user')

@section('title')Subir Currículum  @stop
@section('titleHeader')Currículum @stop 

@section('content')
	<div class="parallax-container valign-wrapper">
	    <div class="section no-pad-bot">
	      <div class="container"></div>
	    </div>
	    <div class="parallax"><img src="{!!asset('img/mi-curriculum.jpg')!!}" alt="Mi Curriculum"></div>
	</div>
		<div class="getbackCuenta valign-wrapper">
			<div class="container valign">
				<div class="row ">
						{!!Form::open()!!}
					<div class="col s12 m8 offset-m2 card center ">
						<h5 class="condensada-regular grey-text">Currículum</h5>
						<div class="row">
							<div class="file-field input-field col s10 offset-s1">
						      <div class="btn lime green-text">
						        <input type="file" />
						        <span>Subir CV <i class="material-icons right">backup</i></span>
						      </div>
						      <input class="file-path validate" type="text"/>
						   </div>
						   <div class="input-field col s12  grey-text text-darken-2 center">
		      				<button class="btn waves-effect waves-light  green rto-mono-regularo btn-large" type="submit" name="action">Guardar <i class="material-icons right small">save</i>
								</button>	
		      			</div>
						   <div id="cajaAsignacion" class="col s12">
						   <br>
								<article class="col s12 m11 offset-m1">
									<div class="col s10 borde-bottom ">
										<h6 class="grey-text">Tecnologías de Información - Programacíon</h6>
									</div>
									<div class="col s2 center">
										<a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar"><i class="material-icons red-text">delete</i></a>
									</div>
								</article>
							</div>
						</div>
					</div>
						{!!Form::close()!!}
				</div>
			</div>
	</div>
@stop 

@section('script')

@stop
