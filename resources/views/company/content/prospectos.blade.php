@extends('company.admin_layout')

@section('title') Prospectos de Empresa  @stop 

@section('titleHeader')Elige tus Aspirantes  @stop 

@section('content')
	<section class="container">
		<div class="card">
			<div class="card-content">
				<div class="row ">
					<div class="col s12">
						<h5>Ingeniero en Tecnologías de Información y Comunicación</h5>
					</div>
					<div class="col s12 valign-wrapper caja-empleo">
						<div class="col s1 hide-on-med-and-down l2 center valign">
							<img class="circle responsive-img" src="{!!asset('img/prueba-img.jpg')!!}">
						</div>
						<div class="col s9 m9 l8">
							<h6><i class="material-icons ico-aling green-text">stars</i> <strong>Especialidad:</strong> Programación </h6>
							<div class="row">
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons green-text ico-aling">account_box</i> <strong>Nombre: </strong>Fulanito de Tal</h6>
								</div>
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons green-text ico-aling">phone</i> (614)233-44-54</h6>
								</div>
							</div>
							<p class="justificado slab-r-regular" >Presentación.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat</p>
							<p class="right-align">
								<a href="#mod-detalle-prospect" class="modal-trigger btn-floating waves-effect waves-light green btn"><i class="material-icons white-text">visibility</i></a>
								&nbsp; 
								 <a href="#!" class="btn-floating waves-effect waves-light red btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar de mis Prospectos"><i class="material-icons">delete</i></a>
							</p>
						</div>
						<div class="col s4 m4 l2 card green lighten-4">
							<ul class="green-text text-darken-2" >
								<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
								<li><i class="material-icons ico-aling">event_note</i> 25 años</li>
								<li><i class="material-icons ico-aling">people</i> Casado</li>
								<li><i class="material-icons ico-aling">attach_money</i> 10,000 - 12,000</li>
								<li><i class="material-icons ico-aling">flight_takeoff</i> Viajar: Si</li>
							</ul>
						</div>
					</div>
				</div>{{-- --}}
				<div class="divider"></div>
				<div class="row ">
					<div class="col s12">
						<h5>Ingeniero en Tecnologías de Información y Comunicación</h5>
					</div>
					<div class="col s12 valign-wrapper caja-empleo">
						<div class="col s1 hide-on-med-and-down l2 center valign">
							<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
						</div>
						<div class="col s9 m9 l8">
							<h6><strong>Especialidad:</strong> Programación <i class="material-icons left tiny lime-text">label</i></h6>
							<div class="row">
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons ico-aling">account_box</i> <strong>Nombre: </strong>Fulanito de Tal</h6>
								</div>
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons ico-aling">phone</i> (614)233-44-54</h6>
								</div>
							</div>
							<p class="justificado slab-r-regular" >Presentación.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat</p>
							<p class="right-align">
								<a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver a Detalle"><i class="material-icons white-text">visibility</i></a>
								&nbsp; 
								 <a href="#!" class="btn-floating waves-effect waves-light red btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar de mis Prospectos"><i class="material-icons">delete</i></a>
							</p>
						</div>
						<div class="col s4 m4 l2 card green lighten-4">
							<ul class="green-text text-darken-2" >
								<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
								<li><i class="material-icons ico-aling">event_note</i> 25 años</li>
								<li><i class="material-icons ico-aling">people</i> Casado</li>
								<li><i class="material-icons ico-aling">attach_money</i> 10,000 - 12,000</li>
								<li><i class="material-icons ico-aling">flight_takeoff</i> Viajar: Si</li>
							</ul>
						</div>
					</div>
				</div>{{-- --}}
				<div class="divider"></div>
				<div class="row ">
					<div class="col s12">
						<h5>Ingeniero en Tecnologías de Información y Comunicación</h5>
					</div>
					<div class="col s12 valign-wrapper caja-empleo">
						<div class="col s1 hide-on-med-and-down l2 center valign">
							<img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
						</div>
						<div class="col s9 m9 l8">
							<h6><strong>Especialidad:</strong> Programación <i class="material-icons left tiny lime-text">label</i></h6>
							<div class="row">
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons ico-aling">account_box</i> <strong>Nombre: </strong>Fulanito de Tal</h6>
								</div>
								<div class="col s6">
									<h6 class="rto-mono-medium"><i class="material-icons ico-aling">phone</i> (614)233-44-54</h6>
								</div>
							</div>
							<p class="justificado slab-r-regular" >Presentación.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo esse nemo deleniti est repudiandae delectus, ratione animi, enim odio consequuntur repellendus in aspernatur earum ad placeat</p>
							<p class="right-align">
								<a href="#!" class="btn-floating waves-effect waves-light green btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver a Detalle"><i class="material-icons white-text">visibility</i></a>
								&nbsp; 
								 <a href="#!" class="btn-floating waves-effect waves-light red btn tooltipped" data-position="top" data-delay="50" data-tooltip="Eliminar de mis Prospectos"><i class="material-icons">delete</i></a>
							</p>
						</div>
						<div class="col s4 m4 l2 card green lighten-4">
							<ul class="green-text text-darken-2" >
								<li><i class="material-icons ico-aling">location_on</i> Chihuahua</li>
								<li><i class="material-icons ico-aling">event_note</i> 25 años</li>
								<li><i class="material-icons ico-aling">people</i> Casado</li>
								<li><i class="material-icons ico-aling">attach_money</i> 10,000 - 12,000</li>
								<li><i class="material-icons ico-aling">flight_takeoff</i> Viajar: Si</li>
							</ul>
						</div>
					</div>
				</div>{{-- --}}
				<div class="divider"></div>
			</div>
		</div>

	</section>
		<!-- Modal Structure -->
	  	<div id="mod-detalle-prospect" class="modal modal-fixed-footer">
	    	<div class="modal-content">
				@include('aspirantes.partials.cv-show')
	    	</div>
	    	<div class="modal-footer">
	      		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
	      		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ingresar</a>
	    	</div>
	  	</div>

@stop
