@extends('layouts.principal')

@section('title') Vacante -  @stop 

@section('content')
	<br>
	<div class="row">
		<div class="col s12 m8 offset-m1">
			<section class="">
				<h4 class="grey-text text-darken-4">Programador Web</h4>
				<div class="row ">
					<div class="col s9 m9 l10 ">
						<h5 class="grey-text"><i class="material-icons ico-aling grey-text text-darken-4 ">label</i>Menpower</h5>
							<h6 class="condensada-regular">Lic. Maria Fernadan Castro Peña</h6>
						<h6 class="condensada-italica">empleo@menpower</h6>
						<div class="col s12">
							<ul class="lista-detalle green-text text-darken-2" >
								<li><i class="material-icons ico-aling">contact_phone</i> (616)5328765</li>
								<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
								<li><i class="material-icons ico-aling">event_note</i>12 Ago</li>
								<li><i class="material-icons ico-aling">library_books</i>Programación</li>
								<li><i class="material-icons ico-aling">attach_money</i>10,000</li>
								<li><i class="material-icons ico-aling">timer</i>Completa</li>
							</ul>
						</div>
					</div>
					<div class="col s3 m3 l2 center ">
						<br class="hide-on-med-and-up">
						<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
					</div>
				</div>
			</section>

			<section>
				<div class="divider"></div>
				<div class="col s12 center">
					<p>
						<a href="#!" class="btn waves-effect waves-green green lighten-2 z-depth-2 btn-large">Postularme <i class="material-icons right medium">playlist_add</i></a>
					</p>
				</div>
				<div class="row caja-empleo">
					<h5 class="green-text condensada-regular">Descripción:</h5>
					<p class="justificado p-descrip-disdad2 font-large" >Empresa líder en desarrollo de Videojuegos para dispositivos móviles, esta buscando personal para el área de desarrollo de aplicaciones Web en PHP. Requisitos: •Ingeniero en Computación, Sistemas Computacionales o similar. •Ser emprendedor y muy creativo. • Apasionado en el desarrollo de páginas Web. • Poseer conocimientos avanzados en PHP, MySQL y HTML. •Se valoraran conocimientos en AJAX •Inglés: 80% Disponibilidad para cambiar de residencia a la ciudad de Mexicali B.C.</p>
				</div>
				<div class="row">
					<div class="col s6 ">
						<p><i class="material-icons ico-aling">attach_money</i><strong>Sueldo:</strong> 
							<span class="grey-text">$10,000.</span></p>
						<p><i class="material-icons ico-aling">recent_actors</i><strong>Cantidad de Vacantes:</strong> 
							<span class="grey-text">2</span>
						</p>
					</div>
					<div class="col s6 ">
						<p><i class="material-icons ico-aling">local_airport</i><strong>Disponibilidad para Viajar:</strong> 
							<span class="grey-text">No</span>
						</p>
						<p><i class="material-icons ico-aling">local_shipping</i><strong>Disponibilidad para Cambio de Residencia:</strong> 
							<span class="grey-text">No</span>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col s11 offset-s1">
						<h5 class="green-text"><i class="material-icons ico-aling">label</i>Requisitos</h5>
						<blockquote>
							<ul class="p-descrip-disdad2">
								<li>Exelente sueldo base + bono mensual.</li>
								<li>Prestaciones superiores a las de Ley.</li>
								<li>Oportunidad de Crecimineto a corto plazo.</li>
								<li>Horarios flexibles, turnos disponibles desde 20hrs hasta 48hrs a la semana </li>
								<li>Convenios con diferentes escuelas</li>
								<li>Cómodas instalaciones con: cafetería, terraza, wifi, estacionamiento, enfermería y sala de descanso</li>
							</ul>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<div class="col s8 offset-s1">
						<h5 class="green-text"><i class="material-icons ico-aling">label</i>Beneficios</h5>
						<blockquote>
							<ul class="p-descrip-disdad2">
								<li>Exelente sueldo base + bono mensual.</li>
								<li>Prestaciones superiores a las de Ley.</li>
								<li>Oportunidad de Crecimineto a corto plazo.</li>
								<li>Horarios flexibles, turnos disponibles desde 20hrs hasta 48hrs a la semana </li>
								<li>Convenios con diferentes escuelas</li>
								<li>Cómodas instalaciones con: cafetería, terraza, wifi, estacionamiento, enfermería y sala de descanso</li>
							</ul>
						</blockquote>
					</div>
				</div>
				<div class="row">
					<p>
						Si estas interesado y cumples con los requisitos aplica por este medio y nosotros nos comunicamos
					</p>
				</div>
				<div class="col s12 center">
					<p>
						<a href="#!" class="btn waves-effect waves-green green lighten-2 z-depth-2 btn-large">Postularme <i class="material-icons right medium">playlist_add</i></a>
					</p>
				</div>
				<div class="divider"></div>
			</section>
		</div>
		<div class="col m2 hide-on-small-only ">
			<div class="relativo">
				<div class="row card caja-sinfix ">
					<div class="col s12">
						<h6 class="green-text text-darken-2 center ">Resumen de Oferta</h6>
						<ul class="green-text text-darken-2 collection with-header lista-resumen" >
							<li class="collection-header grey-text">
								<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
							</li>
							<li><i class="material-icons ico-aling">location_on</i> Chihuahua (7)</li>
							<li><i class="material-icons ico-aling">event_note</i>12 Ago</li>
							<li><i class="material-icons ico-aling">library_books</i> Programación</li>
							<li><i class="material-icons ico-aling">attach_money</i> 10,000</li>
							<li><i class="material-icons ico-aling">local_airport</i> Viajar: No</li>
							<li><i class="material-icons ico-aling">local_shipping</i> Cambio de Residencia: No</li>
							<li><i class="material-icons ico-aling">timer</i> Completa</li>
						</ul>
						<div class="row card green valign-wrapper ">

							<div class="valign center col s12 center">
								<br>
								<a href="">
								<h6 class="center white-text condensada-regular">Publica Tu Servicio</h6>
								
									<i class="material-icons white-text large">local_library</i>
								</a>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop 

@section('script')
	{!!Html::script('js/fixed-resum.js')!!}
@stop