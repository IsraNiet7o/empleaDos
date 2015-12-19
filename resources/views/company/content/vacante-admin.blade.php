@extends('company.admin_layout')

@section('title') Administración de Vacantes  @stop 

@section('titleHeader')Mis Vacantes @stop 

@section('content')
	<section class="container">
		<div class="row">
			<div class="col s12">
				<div class="card">
					<div class="card-content">
						<h3 class="green-text">Vacantes</h3>
								<table class="responsive-table striped">
						        <thead>
						          <tr>
						              <th colspan="2">Vacante</th>
						              <th colspan="1" class="center-align">Postulaciones</th>
						              <th class="center">Estatus</th>
						              <th></th>
						          </tr>
						        </thead>
						        <tbody>
						          <tr>
						            <td>
						            	<p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						            	<p>
						            		<strong>Administracion - Administración de Empresas</strong>
						            	</p>
						            </td>
						            <td>
						            	<p><strong>Creada:</strong> 24/Agosto/15</p>
						            	<p><strong>Expira:</strong> 7/Septiembre/15</p>
						            </td>
						            <td><p class="green-text center">124</p></td>
						            <td class="center">
						            	<a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a></td>
						            <td class="center">
						            	<!-- Dropdown Trigger -->
						            	  <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown100'><i class="material-icons green-text accent-3">more_vert</i></a>

						            	  <!-- Dropdown Structure -->
						            	  <ul id='dropdown100' class='dropdown-content'>
						            	    <li><a href="#!">Activar</a></li>
						            	    <li><a href="#!">Desactivar</a></li>
						            	    <li class="divider"></li>
						            	    <li><a href="#!" class="red-text">Eliminar</a></li>
						            	  </ul>
						            </td>
						          </tr>
						          <tr>
						            <td>
						            	<p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						            	<p>
						            		<strong>Administracion - Administración de Empresas</strong>
						            	</p>
						            </td>
						            <td>
						            	<p><strong>Creada:</strong> 24/Agosto/15</p>
						            	<p><strong>Expira:</strong> 7/Septiembre/15</p>
						            </td>
						            <td><p class="green-text center">124</p></td>
						            <td class="center">
						            	<a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a></td>
						            <td class="center">
						            	<!-- Dropdown Trigger -->
						            	  <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown1'><i class="material-icons green-text accent-3">more_vert</i></a>

						            	  <!-- Dropdown Structure -->
						            	  <ul id='dropdown1' class='dropdown-content'>
						            	    <li><a href="#!">Activar Vacante</a></li>
						            	    <li><a href="#!">Desactivar Vacante</a></li>
						            	    <li class="divider"></li>
						            	    <li><a href="#!" class="red-text">Eliminar Vacante</a></li>
						            	  </ul>
						            </td>
						          <tr>
						            <td>
						            	<p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						            	<p>
						            		<strong>Administracion - Administración de Empresas</strong>
						            	</p>
						            </td>
						            <td>
						            	<p><strong>Creada:</strong> 24/Agosto/15</p>
						            	<p><strong>Expira:</strong> 7/Septiembre/15</p>
						            </td>
						            <td><p class="green-text center">124</p></td>
						            <td class="center">
						            	<a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a>
						            	</td>
						            <td class="center">
						            	<!-- Dropdown Trigger -->
						            	  <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown1'><i class="material-icons green-text accent-3">more_vert</i></a>

						            	  <!-- Dropdown Structure -->
						            	  <ul id='dropdown1' class='dropdown-content'>
						            	    <li><a href="#!">Activar Vacante</a></li>
						            	    <li><a href="#!">Desactivar Vacante</a></li>
						            	    <li class="divider"></li>
						            	    <li><a href="#!" class="red-text">Eliminar Vacante</a></li>
						            	  </ul>
						            </td>
						          </tr>
						        </tbody>
						    </table>
					</div>
				</div>
			</div>
			<div class="col s12">
				<div class="card">
					<div class="card-content"><h3 class="green-text">Historial</h3>
						<table class="responsive-table striped">
						  <thead>
						    <tr>
						        <th colspan="2">Vacante</th>
						        <th colspan="1" class="center-align">Postulaciones</th>
						        <th class="center">Estatus</th>
						        <th></th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>
						        <p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						        <p>
						            <strong>Administracion - Administración de Empresas</strong>
						        </p>
						      </td>
						      <td>
						        <p><strong>Creada:</strong> 24/Agosto/15</p>
						        <p><strong>Expira:</strong> 7/Septiembre/15</p>
						      </td>
						      <td><p class="green-text center">124</p></td>
						      <td class="center">
						        <a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a></td>
						      <td class="center">
						        <!-- Dropdown Trigger -->
						          <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown1'><i class="material-icons green-text accent-3">more_vert</i></a>
						
						          <!-- Dropdown Structure -->
						          <ul id='dropdown1' class='dropdown-content'>
						            <li><a href="#!">Activar Vacante</a></li>
						            <li><a href="#!">Desactivar Vacante</a></li>
						            <li class="divider"></li>
						            <li><a href="#!" class="red-text">Eliminar Vacante</a></li>
						          </ul>
						      </td>
						    </tr>
						    <tr>
						      <td>
						        <p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						        <p>
						            <strong>Administracion - Administración de Empresas</strong>
						        </p>
						      </td>
						      <td>
						        <p><strong>Creada:</strong> 24/Agosto/15</p>
						        <p><strong>Expira:</strong> 7/Septiembre/15</p>
						      </td>
						      <td><p class="green-text center">124</p></td>
						      <td class="center">
						        <a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a></td>
						      <td class="center">
						        <!-- Dropdown Trigger -->
						          <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown1'><i class="material-icons green-text accent-3">more_vert</i></a>
						
						          <!-- Dropdown Structure -->
						          <ul id='dropdown1' class='dropdown-content'>
						            <li><a href="#!">Activar Vacante</a></li>
						            <li><a href="#!">Desactivar Vacante</a></li>
						            <li class="divider"></li>
						            <li><a href="#!" class="red-text">Eliminar Vacante</a></li>
						          </ul>
						      </td>
						    <tr>
						      <td>
						        <p>México-Chihuahua <i class="material-icons left">label_outline</i></p>
						        <p>
						            <strong>Administracion - Administración de Empresas</strong>
						        </p>
						      </td>
						      <td>
						        <p><strong>Creada:</strong> 24/Agosto/15</p>
						        <p><strong>Expira:</strong> 7/Septiembre/15</p>
						      </td>
						      <td><p class="green-text center">124</p></td>
						      <td class="center">
						        <a class="btn-floating tooltipped white" data-position="top" data-delay="50" data-tooltip="Activo"><i class="material-icons green-text">assignment_turned_in</i></a></td>
						      <td class="center">
						        <!-- Dropdown Trigger -->
						          <a class='dropdown-button btn-floating white' href='#' data-activates='dropdown1'><i class="material-icons green-text accent-3">more_vert</i></a>
						
						          <!-- Dropdown Structure -->
						          <ul id='dropdown1' class='dropdown-content'>
						            <li><a href="#!">Activar Vacante</a></li>
						            <li><a href="#!">Desactivar Vacante</a></li>
						            <li class="divider"></li>
						            <li><a href="#!" class="red-text">Eliminar Vacante</a></li>
						          </ul>
						      </td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>{{-- card end --}}
			</div>
		</div>{{-- row end --}}
	</section>

@stop