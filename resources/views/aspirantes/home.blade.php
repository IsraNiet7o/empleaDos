@extends('aspirantes.admin_user')

@section('title') Home  @stop 

@section('titleHeader')Mi Perfil  @stop 
@section('content')

<section class="container">
	<h3 class="condensada-regular green-text">Bienvenido a tu Portal de Empleo</h3>
	<div class="row">
		<di class="col s12 m6">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light">
			      <img class="activator" src="{!!asset('img/admi-user2.jpg')!!}">
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Mi Currículum<i class="material-icons right">more_vert</i></span>
			      <p><a href="#" class="grey-text">Subir Currículum <i class="material-icons ico-aling">backup</i></a> <span class="condensada-light  grey-text text-lighten-1"> En formato .doc ó .pdf </span></p>
			    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Mi Currículum<i class="material-icons right">close</i></span>
			      <p><a href="#!" class="green-text text-darken-4">Editar mi Currículum: </a>En esta sección podrás llenar tu currículum y actualizar cada vez que quieras, ademas de poder descargarlo en formato PDF una vez que lo hayas rellenado nuestro formulario completamente.</p>
			      <p><p><a href="#!" class="green-text text-darken-4">Mis Preferencias: </a> Esta sección es muy importante, porque no dice cuáles son tus intereses y te llegaran notificaciones si hay nuevas vacantes que cumplan con tus preferencias.  </p>
			      <p>Ó si prefieres sube tu currículum en formato Word ó PDF.</p>
			    </div>
			  </div>
		</di>
		<di class="col s12 m6">
			<div class="card">
			    <div class="card-image waves-effect waves-block waves-light">
			      <img class="activator" src="{!!asset('img/admi-user.jpg')!!}">
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Servicios Profecionales<i class="material-icons right">more_vert</i></span>
			      <p><a href="#" class="grey-text">Administrar mis Servicos Profecionales<i class="ico-aling material-icons">storage</i></a></p>
			    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Servicos Profecionales<i class="material-icons right">close</i></span>
			      <p><a href="#!" class="green-text text-darken-4">Postular Servicios: </a>Es la sección donde podrás publicar anucios de Servicios Profecionales que realices de manera Independiente.</p>
			      <p><p><a href="#!" class="green-text text-darken-4">Administrar Servicios: </a> Te mostramos una lista de los Servicios que has postulado, podrás editar o eliminar tus servicios segun deses. </p>
			    </div>
			  </div>
		</di>
	</div>
	<div class="row">
		<div class="col s12">
		<h3 class="green-text">Mis Postulaciones</h3>
			<table class="responsive-table striped">
	        <thead>
	          <tr>
	              <th data-field="id">Vacante</th>
	              <th data-field="name">Ciudad</th>
	              <th data-field="price"> </th>
	              <th data-field="price">Proceso de Selección</th>
	              <th data-field="price"></th>
	          </tr>
	        </thead>
	
	        <tbody>
	          <tr>
	            <td><strong>Programador PHP</strong></td>
	            <td>Chihuahua</td>
	            <td><span class="green-text"><i class="material-icons">star</i></span></td>
	            <td>En Curso</td>
	            <td class="center"><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Ingeniero de Software</strong></td>
	            <td>Cd. Juarez</td>
	            <td><span class="grey-text"><i class="material-icons">star_border</i></span></td>
	            <td>Finalizado</td>
	            <td class="center"><a href="#!" class="btn-floating waves-effect waves-light disabled btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Desarrollador Web</strong></td>
	            <td>Delicias</td>
	            <td><span class="grey-text"><i class="material-icons">star_border</i></span></td>
	            <td>Finalizado</td>
	            <td class="center"><a href="#!" class="btn-floating waves-effect waves-light disabled btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	        </tbody>
	      </table>
		</div>
	</div>
</section>
	<div class="cartelPer z-depth-1">
		
	</div>
<section class="container">
	<div class="row">
		<div class="col s12">
		<h3 class="green-text">Sugerencias</h3>
			<table class="responsive-table striped">
	        <thead>
	          <tr>
	              <th data-field="id">Vacante</th>
	              <th data-field="name">Ciudad</th>
	              <th data-field="price">Tipo De Contrato</th>
	              <th data-field="price">Salario</th>
	              <th data-field="price"></th>
	          </tr>
	        </thead>
	
	        <tbody>
	          <tr>
	            <td><strong>Programador PHP</strong></td>
	            <td>Chihuahua</td>
	            <td>Tiempo Completo</td>
	            <td>$12,000</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Ingeniero de Software</strong></td>
	            <td>Cd. Juarez</td>
	            <td>Practicante Medio Tiempo</td>
	            <td>$3,000</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	          <tr>
	            <td><strong>Desarrollador Web</strong></td>
	            <td>Delicias</td>
	            <td>Honorarios</td>
	            <td>A convenir</td>
	            <td><a href="#!" class="btn-floating waves-effect waves-light white btn tooltipped" data-position="top" data-delay="50" data-tooltip="Ver"><i class="material-icons green-text">visibility</i></a></td>
	          </tr>
	        </tbody>
	      </table>
		</div>
	</div>
	<br>
</section>
@stop 