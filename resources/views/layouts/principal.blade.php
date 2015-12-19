<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Comatible" content="IE=edge,chrome=1"/>

	<title>@yield('title') - Bolsa de Trabajo</title>
	<!--Import materialize.css-->
	{!!Html::style('css/flexslider.css')!!}
	{!!Html::style('css/materialize.min.css')!!}
	{!!Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')!!}
	{!!Html::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Istok+Web:400,400italic,700,700italic')!!}
	{!!Html::style('https://fonts.googleapis.com/css?family=Roboto+Mono:400,500,400italic,500italic,700,700italic,300italic')!!}
	{!!Html::style('css/style.css')!!}


</head>
<body>
	@include('layouts.menu_principal')	
	
	@yield('content')
	
	@include('layouts.footer_principal')
	
	{!!Html::script('js/jquery.js')!!}
	{!!Html::script("js/materialize.js")!!}
	{!!Html::script("js/init.js")!!}

	@section('script')
	@show
	
	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
			$(".dropdown-button").dropdown();
			$('.modal-trigger').leanModal();
			$('select').material_select();

			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15 // Creates a dropdown of 15 years to control year
			  });
		});
	</script>
</body>
</html>