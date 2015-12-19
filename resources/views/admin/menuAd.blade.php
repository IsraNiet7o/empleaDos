	<header>
      <nav class="top-nav green z-depth-1 fondo-ad-ad">
        <div class="container">
           <div class="nav-wrapper"></div> 
           	<div class="nav-wrapper">
           		<a class="page-title condensada-light">@yield('titleHeader')</a> 
		    	</div>
          <div class="row card-contacto-admin right-align">
            <div class="col s9 m10"> 
              <h6 class=" black-text ">Administración </h6>
                <h6 class="grey-text">Bienvenido UserAdmin</h6>
                <h6 class="light grey-text">Fecha: <span>{{ date('d/m/Y') }}</span></h6>
            </div>
            <div class="col s3 m2 center ">
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
            <li class="bold"><a class="collapsible-header waves-effect waves-teal active">Reportes <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route('services.create') }}">Usuarios</a></li>
                  <li><a href="#!">Empresas</a></li>
                  <li><a href="#!">Vacantes</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Carreras <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{{ route('curriculum.create') }}">Carrera</a></li>
                  <li><a href="{{ route('preferences.create') }}">Especialidad</a></li>
                </ul>
              </div>
            </li>
            <li class="bold">
            	<a class="collapsible-header  waves-effect waves-teal ">Localidad <i class="material-icons right">keyboard_arrow_down</i></a>
              	<div class="collapsible-body">
                	<ul>
                  	<li><a href="{{ route('adminuser.home') }}">Paises</a></li>
                  	<li><a href="{{ route('adminuser.postu') }}">Estados</a></li>
                    <li><a href="{{ route('index.change') }}">Ciudades</a></li>
                	</ul>
              	</div>
            </li>
          </ul>
        </li>
        <br><br>
        <li class="bold"><a href="" class="waves-effect waves-teal">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
      </ul>
    </header>