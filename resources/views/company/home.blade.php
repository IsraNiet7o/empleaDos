@extends('company.admin_layout')

@section('title') Administración  @stop 

@section('titleHeader')Bienvenido  @stop 

@section('content')
	<section class="container">

		<div class="row white">
			<div class="col s12 center-align">
				<h3 class="thin">Postula tu vacante Aquí <a href="{{ route('vacante.create') }}" class="btn-floating btn-large waves-effect waves-teal btn-flat green">
			    		  <i class="large material-icons">backup</i>
			    		</a></h3>
			</div>
			<div class="col s12 m6">
				<div class="card">
					<div class="card-content">
						<span class="card-title black-text">Encuentra tu Aspirante</span>
						{!! Form::open() !!}
						<div class="row">
					      <div class="input-field col s12 m6">
					        	{!! Form::text('pal_clave',null,['class'=>'validate']) !!}
					          <label for="pal_clave">Palabra Clave</label>
					      </div>
					      <div class="input-field col s12 m6  grey-text text-darken-2 ">
					            {!!Form::select('Estado',array('1'=>'Chihuahua','2'=>'Guadalajara','3'=>'Monterrey'), null, ['placeholder' => 'Elige un Estado','required'=>'required'])!!}
					            {!!   Form::label('Estado','Estado')!!}
					      </div>
					      <div class="input-field col s12 m6 grey-text text-darken-2">
					            {!!Form::select('categoria',array('1'=>'Ingeniería','2'=>'Contabilidad','3'=>'Diseño'), null, ['placeholder' => 'Elige una Categoría','required'=>'required'])!!}
					            {!!   Form::label('categoria','Categoría')!!}
					      </div>
					      <div class="input-field col s12 m6 grey-text text-darken-2">
					            {!!Form::select('subcategoria',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Elige una Subcategoía','required'=>'required'])!!}
					            {!!   Form::label('subcategoria','Subcategoía')!!}
					      </div>
					   </div>
					   <div class="row">
					   	<div class="input-field col s3">
					   		<label>Edad entre:</label>
					   	</div>
					   	<div class="input-field col s4">
					   		{!!Form::select('edad1',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Edad','required'=>'required'])!!}
					   	</div>
					   	<div class="input-field col s1">
					   		<label>Y</label>
					   	</div>
					   	<div class="input-field col s4">
					   		{!!Form::select('edad2',array('1'=>'Sub1','2'=>'Sub2','3'=>'Sub3'), null, ['placeholder' => 'Edad','required'=>'required'])!!}
					   	</div>
					   </div>
					   <div class="row">
					   	<div class="input-field col s12 grey-text text-darken-2 right-align">
	            			<button class="btn waves-effect waves-light  green btn-large" type="submit" name="action"><i class="material-icons right">search</i>Buscar 
	    						</button>	
	            		</div>
					   </div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
			<div class="col s12 m6">
			<ul class="collapsible" data-collapsible="accordion">
				<div class="collapsible-header"><strong>Tus Publicaciones</strong></div>
			    <li>
			      <div class="collapsible-header active"><i class="material-icons grey-text">label_outline</i>Ingeniero en Sistemas <label class="right">12 Aspirantes</label></div>
			      <div class="collapsible-body">
				      	<ul id="ul-pos-comp">
			      		<li class="right-align"><span class="my-badge green">Activo</span></li>
			      		<li>
		      				<span>Fecha de Postulación:<i class="material-icons left green-text">today</i></span>
		      				<span class="grey-text right" >2/Agosto/2015</span>
			      		</li>
			      		<li>
		      				<span>Especialidad:<i class="material-icons left green-text">stars</i></span>
		      				<span class="grey-text right" >Programador Web</span>	
			      		</li>
			      		<li>
			      			<span>Jornada:<i class="material-icons left green-text">access_time</i></span>
			      			<span class="grey-text right" >Practicante Completo</span>
			      		</li>
			      		<li class="right-align">
			      			<a href="#!" class="btn waves-effect waves-light red right-align">Desactivar <i class="material-icons left">highlight_off</i></a>
			      		</li>
			      	</ul>
			      </div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons grey-text">label_outline</i>Ingeniero en Sistemas <label class="right">12 Aspirantes</label></div>
				      <div class="collapsible-body">
				      	<ul id="ul-pos-comp">
				      		<li class="right-align"><span class="my-badge green">Activo</span></li>
				      		<li>
			      				<span>Fecha de Postulación:<i class="material-icons left green-text">today</i></span>
			      				<span class="grey-text right" >2/Agosto/2015</span>
				      		</li>
				      		<li>
			      				<span>Especialidad:<i class="material-icons left green-text">stars</i></span>
			      				<span class="grey-text right" >Programador Web</span>	
				      		</li>
				      		<li>
				      			<span>Jornada:<i class="material-icons left green-text">access_time</i></span>
				      			<span class="grey-text right" >Practicante Completo</span>
				      		</li>
				      		<li class="right-align">
				      			<a href="#!" class="btn waves-effect waves-light red right-align">Desactivar <i class="material-icons left">highlight_off</i></a>
				      		</li>
				      	</ul>
				      </div>
				    </li>
				    <li>
				      <div class="collapsible-header"><i class="material-icons grey-text">label_outline</i>Ingeniero en Sistemas <label class="right">12 Aspirantes</label></div>
				      <div class="collapsible-body">
				      	<ul id="ul-pos-comp">
				      		<li class="right-align"><span class="my-badge green">Activo</span></li>
				      		<li>
			      				<span>Fecha de Postulación:<i class="material-icons left green-text">today</i></span>
			      				<span class="grey-text right" >2/Agosto/2015</span>
				      		</li>
				      		<li>
			      				<span>Especialidad:<i class="material-icons left green-text">stars</i></span>
			      				<span class="grey-text right" >Programador Web</span>	
				      		</li>
				      		<li>
				      			<span>Jornada:<i class="material-icons left green-text">access_time</i></span>
				      			<span class="grey-text right" >Practicante Completo</span>
				      		</li>
				      	</ul>
				      </div>
				    </li>
				  </ul>
			</div>
		
		
			<div class="row">
				<div class="col s12">
					<div class="card">
						<div class="card-content">
								<h3 class="condensada-regular">Resumen de Postulaciones</h3>
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
				</div>
			</div>

			<div class="row ">
				<div class="col s12">
					<div class="card">
						<div class="card-content">
								<h3 class="condensada-regular">Historial</h3>
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
				</div>
			</div>
			<br>
		</div>
	</section>
@endsection

@section('script')

@stop 
