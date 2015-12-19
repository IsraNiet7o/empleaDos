@extends('layouts.principal')

@section('title')
  Bienvenidos 
@stop

@section('content')

  <div class="parallax-container no-pad-bot my-banner">
    <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="{!! asset('img/background1.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3 class="white-text shadow-title bold">El mejor portal de Empleo</h3>
            <div class="row">
              <div class="col s12 ">
                <h4 id="h4-com" class="white-text thin">"El verdadero progreso es el que pone la tecnología al alcance de todos"</h4>
                <h6 id="h6-ref" class="right-align">Henry Ford</h6>
              </div>
            </div>
            <div class="row">
              <a href="{{ route('frontend.create') }}" class="btn waves-effect green lime-text btn-large btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Publica tu Curriculum</a>
              <a href="{{ route('company.create') }}" class="btn waves-effect waves-light lime green-text  btn-large btn-chip"><i class="material-icons left btn-chip ">description</i>Postula tú Vacante</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-1.jpg') !!}" > <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            <div class="row">
              <a href="{{ route('frontend.create') }}" class="btn waves-effect green yellow-text btn-chip btn-large"><i class="material-icons right">cloud_circle</i>Sube tu Curriculum</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-2.jpg') !!}"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Publica tu Vacante.</h5>
            <div class="row">
              <a href="{{ route('company.create') }}" class="btn waves-effect yellow green-text btn-large btn-chip"><i class="material-icons right">new_releases</i>Gratis</a>
            </div>
          </div>
        </li>
        <li>
          <img src="{!! asset('img/background1-3.jpg') !!}"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            <div class="row">
              <a href="#!" class="btn waves-effect green yellow-text btn-large btn-chip"><i class="material-icons right">arrow_downward</i>Busca tu Futuro</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>


  <div id="con-form-vac" class="container">
    <div class="section">
    <div id="mis-botones-prin" class="row center"> 
        <div class="col s12 m4">
          <a href="{{ route('frontend.create') }}" class="btn waves-effect green yellow-text  btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Publica tu Curriculum</a>
        </div>
        <div class="col s12 m4">
          <a href="{{ route('company.create') }}" class="btn waves-effect waves-light lime green-text   btn-chip"><i class="material-icons left btn-chip ">description</i>Postula tú Vacante</a>
        </div>
        <div class="col s12 m4">
          <a href="{{ route('frontend.create') }}" class="btn waves-effect green yellow-text  btn-chip waves-light"><i class="material-icons right btn-chip ">note_add</i>Publica tus Servicios</a>
        </div>
      </div>
      <div class="row ">
        <ul id="formulario-modible">
          <li>
            {!! Form::open(['route'=>'vacante.index', 'method'=>'GET']) !!}
            
            @include('frontend.partials.form-busqueda')

          <div class="input-field col s12 m6 grey-text text-darken-2 center">
            <button class="btn waves-effect waves-light  green btn-large" type="submit" name="action"><i class="material-icons right">search</i>Buscar Vacante 
            </button> 
          </div>
        {!! Form::close() !!}
          </li>
        </ul>
      </div>
      
      <div class="row">
        <div class="col s12 center">
          <ul id="ul-vertical">
            <li>
              <h3><i class="medium material-icons lime-text">contacts</i></h3>
              <h3>¿QUIENES SOMOS?</h3>
              <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Los empleadores valoran aquellas personas que buscan trabajo con trabajo y no aquellos que se quedan de brazos cruzados.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
        
      <div class="row">
        <div class="col s12 m6">
          <div class="icon-block">
            <h2 class="center lime-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
        	<div class="col s12 m6">
        	  <div class="icon-block">
        	    <h5 class="center">Despues de Registrarte</h5>
        	    <div class="cambio center relativo">
        	    	<ul class="condensada-regular lista-proceso left-align grey-text">
        					<li>1 - Busca</li>
        					<li>2 - Identifica</li>
        					<li>3 - Postula</li>
        					<li>4 - Compite</li>
        					<li>5 - Encuentra</li>
        	    	</ul>
        	    	<img src="img/proceso-gira.png" class="responsive-img" alt="Proceso de Busqueda de Empleo">
        	    				
        	    </div>
        	  </div>
        	</div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 condensada-light"><spam class="lime-text">¡¡¡Recuerda!!!</spam>, las grandes empresas empiezan a buscar sus refuerzos con tiempo, si tienes claro tu perfil y los sectores de mercado a los que te quieres o puedes dirigir, no esperes y comienza a moverte.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
  
@stop

@section('script')

  <script>
  $(document).ready(function(){
      $('.slider').slider({
        //indicators:false,
        full_width: true, 
        height: 380
      });
      // Horizontal staggered list
      Materialize.showStaggeredListRigth = function(selector) {
        var time = 0;
        $(selector).find('li').velocity(
            { translateX: "200px"},
            { duration: 0 });

        $(selector).find('li').each(function() {
          $(this).velocity(
            { opacity: "1", translateX: "0"},
            { duration: 800, delay: time, easing: [60, 10] });
          time += 120;
        });
      };
      var options = [ 
          {selector: '#formulario-modible', offset: 400, callback: 'Materialize.showStaggeredList("#formulario-modible")' }, 
          {selector:'#mis-botones-prin', offset: 200, callback: 'Materialize.fadeInImage("#mis-botones-prin")' },
          {selector:'#ul-vertical', offset: 400,callback: 'Materialize.showStaggeredListRigth("#ul-vertical")' }]; 
        Materialize.scrollFire(options);

        
    });
  </script>
@endsection

