<div class="linea-header"></div>
<nav class="light green">
	<ul id="slide-out" class="side-nav">
		<li><a class="modal-trigger" href="#modal1"><i class="small material-icons">account_circle</i></a></li>
	    <li><a href="{{ route('frontend.index') }}">Inicio </a></li>
	    <li class="no-padding">
	      <ul class="collapsible collapsible-accordion">
	        <li>
	          <a class="collapsible-header">Aspirantes<i class="mdi-navigation-arrow-drop-down"></i></a>
	          <div class="collapsible-body">
	            <ul>
	              	<li><a href="{{ route('frontend.create') }}">Registrarme </a></li>
					<li><a href="{{ route('frontend.getcuenta') }}">Recuperar Cuenta</a></li>
					<li class="divider"></li>
					<li><a href="{{ route('frontend.preguntas') }}">Preguntas Frecuentes</a></li>
	            </ul>
	          </div>
	        </li>
	      </ul>
	    </li>
	    <li class="no-padding">
	      <ul class="collapsible collapsible-accordion">
	        <li>
	          <a class="collapsible-header">Empresa<i class="mdi-navigation-arrow-drop-down"></i></a>
	          <div class="collapsible-body">
	            <ul>
					<li><a href="{{ route('frontend.company.anuncios') }}">Nuestros Paquetes </a></li>
					<li><a href="{{ route('company.create') }}">¿Como Postular?</a></li>
					<li class="divider"></li>
					<li><a href="#!">Preguntas Frecuentes</a></li>
	            </ul>
	          </div>
	        </li>
	      </ul>
	    </li>
		<li><a href="#!">Servicio </a></li>
  	</ul>
  	<a href="{{ route('frontend.index') }}" class="brand-logo">@Logo</a>

  	<ul class="right hide-on-med-and-down">
	    <li>
	    	<a href="{{ route('frontend.index') }}">Inicio </a>
	    </li>
	    <li>
	    	<a class="dropdown-button" href="#!" data-activates="dropdown1">Aspirante<i class="mdi-navigation-arrow-drop-down right"></i></a>
	    </li>
	    <li>
	    	<a class="dropdown-button" href="#!" data-activates="dropdown2">Empresa<i class="mdi-navigation-arrow-drop-down right"></i></a>
	    </li>
	    <li><a href="#!">Servicio </a></li>
	    <li><a class="modal-trigger" href="#modal1"><i class="small material-icons">account_circle</i></a></li>
	    <ul id='dropdown1' class='dropdown-content2 dropdown-content'>
	      	<li><a href="{{ route('frontend.create') }}">Registrarme </a></li>
			<li><a href="{{ route('frontend.getcuenta') }}">Recuperar Cuenta</a></li>
			<li class="divider"></li>
			<li><a href="{{ route('frontend.preguntas') }}">Preguntas Frecuentes</a></li>
	    </ul>
	    <ul id='dropdown2' class='dropdown-content2 dropdown-content'>
	      	<li><a href="{{ route('frontend.company.anuncios') }}">Nuestros Paquetes </a></li>
			<li><a href="{{ route('company.create') }}">¿Como Postular?</a></li>
			<li class="divider"></li>
			<li><a href="#!">Preguntas Frecuentes</a></li>
	    </ul>
  	</ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>      
</nav>



