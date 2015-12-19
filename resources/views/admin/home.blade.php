@extends('admin.admin_layout')

@section('title') Home @stop 

@section('titleHeader')Administrador  @stop 

@section('content')
	<section class="container min-conta">
		<h3 class="condensada-regular">Modulo de Administración</h3>
		<div class="row">
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/ad-repor.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Reportes Administrativos</p>
				    </div>
				    <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
				</div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image ">
				      <img src="{!!asset('img/ad-schol.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Carreras y Especialidades</p>
				    </div>
				    <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
				  </div>
			</div>
			<div class="col s12 m4">
				<div class="card small">
				    <div class="card-image">
				      <img src="{!!asset('img/ad-city.jpg')!!}">
				    </div>
				    <div class="card-content">
				      <p>Estasdos y Ciudades</p>
				    </div>
				    <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div>
				  </div>
			</div>
		</div>
	</section>
@endsection