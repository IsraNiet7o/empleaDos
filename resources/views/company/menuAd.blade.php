	<header>
      <nav class="top-nav green z-depth-1 fondo-ad">
        <div class="container">
           <div class="nav-wrapper"></div> 
           	<div class="nav-wrapper">
           		<a class="page-title condensada-light">@yield('titleHeader')</a> 
		    	</div>
          <div class="row card-contacto-admin right-align">
            <div class="col s9 m9"> 
              <h6 class="black-text condensada-regular">Administración</h6>
                <h6 class="hide-on-small-only">Bienvenido UserAdmin</h6>
                <h6 class="hide-on-small-only">Fecha: <span>{{ date('d/m/Y') }}</span></h6>
            </div>
            <div class="col s3 m3 center ">
              <img class="circle responsive-img" src="{!!asset('img/cuenta.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/cuenta.png')!!}'">
            </div>
          </div>
        </div>
      </nav>
      <div class="container ">
      	<a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
      </div>
      <ul id="nav-mobile" class="side-nav fixed">

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="center"><img class="responsive-img " src="{!!asset('img/logo-repuesto.svg')!!}" onerror="this.onerror=null; this.src='{!!asset('img/logo-repuesto.png')!!}'"></li>
            <li class="bold">
            	<a class="collapsible-header  waves-effect waves-teal ">Perfil de Empresa <i class="material-icons right">keyboard_arrow_down</i></a>
              	<div class="collapsible-body">
                	<ul>
                    <li><a href="{{ route('company.edit') }}">Datos de Empresa</a></li>
                    <li><a href="{{ route('company.edit_cuenta') }}">Datos de Cuenta</a></li>
                	</ul>
              	</div>
            </li>
            <li class="bold"><a class="collapsible-header active  waves-effect waves-teal">Mis Vacantes <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route('company.index') }}">Home</a></li>
                  <li><a href="{{ route('vacante.create') }}">Postular Vacante</a></li>
                  <li><a href="{{ route('vacante.admin') }}">Administrar Vacantes</a></li>
                  <li><a href="{{ route('prospect.index') }}">Prospectos</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Servicios <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route('services.create') }}">Postular Servicio</a></li>
                  <li><a href="#!">Administrar Servicios </a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <br><br>
        <li class="bold"><a href="" class="waves-effect waves-teal">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
      </ul>
    </header>