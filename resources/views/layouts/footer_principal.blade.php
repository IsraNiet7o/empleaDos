	<!-- Modal Structure -->
  	<div id="modal1" class="modal">
    	<div class="modal-content">
      		<div class="">
			    <form class="">
			      <div class="row">
			      </div>
			      <div class="row">
			        <div class="input-field col s6 offset-s3">
			          <input id="email" type="email" class="validate">
			          <label for="email">Email</label>
			        </div>
			        <div class="input-field col s6 offset-s3">
			          <input id="password" type="password" class="validate">
			          <label for="password">Password</label>
			        </div>
			      </div>
			    </form>
  			</div>
    	</div>
    	<div class="modal-footer">
      		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
      		<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ingresar</a>
    	</div>
  	</div>

  	<!-- ### Footer ### -->
	<footer class="page-footer green">
	  <div class="contenedor">
	    <div class="row">
	      <div class="col s12 m5 l5 ">
	        <h5 class="grey-text text-lighten-3 condensada-regular">Busca Empleo</h5>
	        <p class="grey-text text-lighten-4 condensada-light">Busca empleo o publica tus Servicos Profecionales.</p>
	        <br>
	        <h2 class="grey-text text-lighten-4 condensada-light center">Logo</h2>
	      </div>
	      <div class="col s12 m2  l2 offset-l1">
	      	<h5 class="white-text light">Aspirantes</h5>
	        <ul>
	          <li><a class="grey-text text-lighten-3 thin" href="{!! asset('/Aspirante/create')!!}">Registrarme</a></li>
	          <li><a class="grey-text text-lighten-3 thin" href="{!!asset('/Aspirante/RecuperarCuenta')!!}">Recuperar Cuenta</a></li>
	          <li class="divider"></li>
	          <br>
	          <li><a class="grey-text text-lighten-3 thin" href="{!! asset('/Preguntas/User')!!}">Preguntas Frecuentes</a></li>
	        </ul>
	      </div>
	      <div class="col l2 s12 m2">
	        <h5 class="white-text light">Empresas</h5>
	        <ul>
	          <li><a class="grey-text text-lighten-3 thin" href="{!! asset('/Company')!!}">Nuestros Paquetes</a></li>
	          <li><a class="grey-text text-lighten-3 thin" href="{!! asset('/Company/create')!!}">¿Como Postular?</a></li>
	          <li class="divider"></li>
	          <br>
	          <li><a class="grey-text text-lighten-3 thin" href="#!">Preguntas Frecuentes</a></li>
	        </ul> 
	      </div>
	      <div class="col l2 s12 m2 ">
	        <h5><a href="" class="white-text light"> Servicios</a></h5>
	        <p class="white-text thin">Publica tus Servicios Profecionales.</p>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright">
	    <div class="container">
	    © <?php echo date("Y");?> Copyright Aptoner
	    <a class="grey-text text-lighten-4 right" href="{!! asset('/')!!}">Inicio<i class=" material-icons ico-aling">home</i></a>
	    </div>
	  </div>
	</footer>