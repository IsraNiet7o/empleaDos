@extends('layouts.principal')

@section('title') Busqueda @stop 

@section('content')
	<br>
	<div class="row">
		<div class="col s12 m8 offset-m1 card">
			<section class="fuente-small ">
				<h5 class="grey-text text-darken-4">Tu Busqueda</h5>
				<div class="row">
					{!! Form::open() !!}
	      			<div class="input-field col s6 m3 l4 grey-text text-darken-2">
	      				{!! Form::text('palabraClave', null, ['class' => 'validate'])	!!}
	      				{!!	Form::label('palabraClave','Palabra Clave')	!!}
	      			</div>
	      			<div class="input-field col s6 m3 l3 grey-text text-darken-2 ">
	      				{!!Form::select('Estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige un Estado'])!!}
	      				{!!	Form::label('Estado','Estado')!!}
	      			</div>
	      			<div class="input-field col s6 m3 l2 grey-text text-darken-2">
	      				{!!Form::select('dia',array('1'=>'Ayer','2'=>'Hace 2 Días','3'=>'Hace 3 Días'), null, ['placeholder' => 'No importa'])!!}
	      				{!!	Form::label('dia','Desde')!!}
	      			</div>
	      			<div class="input-field col s6 m3 grey-text text-darken-2">
	      				{!!Form::select('salario',array('1'=>'$0 MXN - $5,000 MXN','2'=>'$5,000 MXN - $10,000 MXN','3'=>'$10,000 MXN - $15,000 MXN'), null, ['placeholder' => 'No importa'])!!}
	      				{!!	Form::label('salario','Salario')!!}
	      			</div>
	      			<div class="input-field col s6 m4 grey-text text-darken-2">
	      				{!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría'])!!}
	      				{!!	Form::label('categoria','Categoría')!!}
	      			</div>
	      			<div class="input-field col s6 m4 grey-text text-darken-2">
	      				{!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía'])!!}
	      				{!!	Form::label('subcategoria','Subcategoía')!!}
	      			</div>
	      			<div class="input-field col s12 m4 grey-text text-darken-2 center">
	      				<button class="btn waves-effect waves-light  green rto-mono-regularo" type="submit" name="action">Buscar Empleo 
							    </button>	
	      			</div>
					{!! Form::close() !!}
				</div>
			</section>
			<section>
				<p class="pbusqueda">
					Tu Busqueda en <strong>"Chihuahua"</strong> de la Categoria <strong>"Tecnologías/Ingeniería"</strong> y de la subcategoría <strong>"Programación"</strong> desde <strong>"Hace 2 días"</strong> con un Resultado de <strong>"234 Empleos"</strong>.
				</p>

				<div class="divider"></div>
				<div class="row valign-wrapper caja-empleo">
					<div class="col s1 hide-on-med-and-down l2 center valign">
						<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
					</div>
					<div class="col s9 m9 l8">
						<h5>Programador</h5>
						<span class="rto-mono-medium"><i class="material-icons ico-aling tiny lime-text">label</i>Menmpawer</span>
						<p class="justificado slab-r-regular" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat? Eos consequuntur, quis harum mollitia sunt unde aspernatur ducimus laborum animi quisquam repudiandae laboriosam illum, nisi quae corporis repellendus aut praesentium nam similique eum!</p>
						<p class="right-align">
							<a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>
							&nbsp; 
							 <a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Postularme"><i class="material-icons">playlist_add</i></a>
						</p>
					</div>
					<div class="col s4 m4 l2 card green lighten-4">
						<ul class="green-text text-darken-2" >
							<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
							<li><i class="material-icons ico-aling">event_note</i>12 Ago</li>
							<li><i class="material-icons ico-aling">library_books</i>Programación</li>
							<li><i class="material-icons ico-aling">attach_money</i>10,000</li>
						</ul>
					</div>
				</div>
				<div class="divider"></div><div class="divider"></div>
				<div class="row valign-wrapper caja-empleo">
					<div class="col s1 hide-on-med-and-down l2 center valign">
						<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
					</div>
					<div class="col s9 m9 l8">
						<h5>Programador</h5>
						<span class="rto-mono-medium"><i class="material-icons ico-aling tiny lime-text">label</i>Menmpawer</span>
						<p class="justificado slab-r-regular" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat? Eos consequuntur, quis harum mollitia sunt unde aspernatur ducimus laborum animi quisquam repudiandae laboriosam illum, nisi quae corporis repellendus aut praesentium nam similique eum!</p>
						<p class="right-align">
							<a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>
							&nbsp; 
							 <a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Postularme"><i class="material-icons">playlist_add</i></a>
						</p>
					</div>
					<div class="col s4 m4 l2 card green lighten-4">
						<ul class="green-text text-darken-2" >
							<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
							<li><i class="material-icons ico-aling">event_note</i>12 Ago</li>
							<li><i class="material-icons ico-aling">library_books</i>Programación</li>
							<li><i class="material-icons ico-aling">attach_money</i>10,000</li>
						</ul>
					</div>
				</div>
				<div class="divider"></div><div class="divider"></div>
				<div class="row valign-wrapper caja-empleo">
					<div class="col s1 hide-on-med-and-down l2 center valign">
						<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
					</div>
					<div class="col s9 m9 l8">
						<h5>Programador</h5>
						<span class="rto-mono-medium"><i class="material-icons ico-aling tiny lime-text">label</i>Menmpawer</span>
						<p class="justificado slab-r-regular" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat? Eos consequuntur, quis harum mollitia sunt unde aspernatur ducimus laborum animi quisquam repudiandae laboriosam illum, nisi quae corporis repellendus aut praesentium nam similique eum!</p>
						<p class="right-align">
							<a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons">visibility</i></a>
							&nbsp; 
							 <a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Postularme"><i class="material-icons">playlist_add</i></a>
						</p>
					</div>
					<div class="col s4 m4 l2 card green lighten-4">
						<ul class="green-text text-darken-2" >
							<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
							<li><i class="material-icons ico-aling">event_note</i>12 Ago</li>
							<li><i class="material-icons ico-aling">library_books</i>Programación</li>
							<li><i class="material-icons ico-aling">attach_money</i>10,000</li>
						</ul>
					</div>
				</div>
				<div class="divider"></div>
			</section>
		</div>
		<div class="col m2 hide-on-small-only ">
			<div class="relativo">
				<div class="row card ">
					<div class="col s12">
						<h6 class="green-text text-darken-2"><i class="material-icons ico-aling">filter_list</i> Filtros</h6>
						<ul class="green-text text-darken-2 collection with-header lista-filtros" >
							<li class="collection-header grey-text"><h6><i class="material-icons ico-aling green-text">location_on</i>  Ciudad</h6></li>
							<li><a href="">Chihuahua (7)</a></li>
							<li><a href="">Monterrey (14)</a></li>
							<li><a href="">Guadalajara (11)</a></li>
							<li><a href="">D.F,Cd. México (15)</a></li>
							<li><a href="">Queretaro (6)</a></li>
						</ul>
						<ul class="green-text text-darken-2 collection with-header lista-filtros" >
							<li class="collection-header grey-text"><i class="material-icons ico-aling green-text">event_note</i>  Fecha</h6></li>
							<li><a href="">Hoy (7)</a></li>
							<li><a href="">Ayer (14)</a></li>
							<li><a href="">Hace 5 días (11)</a></li>
							<li><a href="">Hace 10 días (15)</a></li>
							<li><a href="">Hace 15 días(6)</a></li>
						</ul>
						<ul class="green-text text-darken-2 collection with-header lista-filtros" >
							<li class="collection-header grey-text"><h6><i class="material-icons ico-aling green-text">library_books</i>  Supcategoría</h6></li>
							<li><a href="">Programación (7)</a></li>
							<li><a href="">Redes Informáticas (14)</a></li>
							<li><a href="">Admin Bas de Datos  (11)</a></li>
							<li><a href="">Desarrollo Web(15)</a></li>
							<li><a href="">Mantenimiento Tic (6)</a></li>
						</ul>
						<ul class="green-text text-darken-2 collection with-header lista-filtros" >
							<li class="collection-header grey-text"><i class="material-icons ico-aling green-text">location_on</i>  Ciudad</li>
							<li><a href="">Chihuahua (7)</a></li>
							<li><a href="">Monterrey (14)</a></li>
							<li><a href="">Guadalajara (11)</a></li>
							<li><a href="">D.F,Cd. México (15)</a></li>
							<li><a href="">Queretaro (6)</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop 