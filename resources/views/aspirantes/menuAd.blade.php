	<header>
      <nav class="top-nav green z-depth-1">
        <div class="container">
           <div class="nav-wrapper"></div> 
           	<div class="nav-wrapper">
           		<a class="page-title condensada-light">@yield('titleHeader')</a> 
		    	</div>
          <div class="row card-contacto-admin right-align">
            <div class="col s9 m10"> 
              <h6 class=" right-align ">Fulanito de Tal Por Cual</h6>
              <div class="row right-align">
                <div class="col s12 m4 hide-on-med-and-down ">
                  <h6 class=" light">Páis: <span>México</span></h6>
                  <h6 class=" light">Estado: <span>Chihuahua</span></h6>
                  <h6 class=" light">Ciudad: <span>Chihuahua</span></h6>

                </div>
                <div class="col s12 m12 l8 hide-on-small-only right-align">
                  <h6>Ingeniero en Tecnologías de Información y Comunicación</h6>
                  <h6 class=" light">Fecha de Nacimiento: <span>07/09/1984</span></h6>
                  <h6 class=" light">Genero: <span>Masculino</span></h6>
                </div>
              </div>
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
            <li class="bold">
            	<a class="collapsible-header  waves-effect waves-teal active z-depth-1">Perfil <i class="material-icons right">keyboard_arrow_down</i></a>
              	<div class="collapsible-body">
                	<ul>
                  	<li><a href="{!!asset('/Aspirante/Admin')!!}">Mi Perfil </a></li>
                  	<li><a href="{!!asset('/Aspirante/Postulaciones')!!}">Mis Postulaciones</a></li>
                  	<li><a href="{!!asset('/Aspirante/Change')!!}">Cuenta</a></li>
                	</ul>
              	</div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal z-depth-1">Mi Currículum <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{!!asset('/Aspirante/Curriculum')!!}">Editar mi Currículum</a></li>
                  <li><a href="{!!asset('/Aspirante/MisPreferencias')!!}">Mis Preferencias</a></li>
                  <li><a href="{!!asset('/Aspirante/SubirCV')!!}">Subir Curriculum</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal z-depth-1">Servicios <i class="material-icons right">keyboard_arrow_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="{!!asset('/Servicios/create')!!}">Postular Servicios</a></li>
                  <li><a href="#!">Administrar Servicios</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="" class="waves-effect waves-teal z-depth-1">Otro titulo</a></li><br><br>
        <li class="bold"><a href="" class="waves-effect waves-teal z-depth-1">Salir <i class="material-icons small right ico-aling ">exit_to_app</i></a></li>
      </ul>
    </header>