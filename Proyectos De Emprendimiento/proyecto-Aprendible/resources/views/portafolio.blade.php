@extends('layout')

@section('title','portafolio')

@section('content')
<!--========CONTENIDO UNICO DE LA VISTA ABOUT!-->
  <h1>Hola Desde portafolio</h1>
  <!--aqui voy a recorrer todos los elementos del arreglo con un for ich-->
  <ul>
  	<!--una condicional por si no tengo arreglos-->
  <!--puedo utilizar isset para confirmar si existe esa variable, y cerramos utilizando endisset-->
  	@if($portafolio) <!--voy a preguntar si el portafolio no esta vacio-->
  		@foreach($portafolio as $portafolioItem)
  			<li> {{ $portafolioItem['title'] }}</li>
  		@endforeach
  		@else
  			<li>Lo siento, no hay proyectos para mostrar ahora!</li>
  		@endif
  		<!--opcion 2-->
  		<!--
	Este forelse lo que va hacer es recorrer el array y mostrarnos los elementos del portafolio, y cuando este vacio el portafolio vamos a mostrar el contenido del @-empty
  		-->
  		@forelse($portafolio as $portafolioItem)
  			<li> {{ $portafolioItem['title'] }}</li>
  		@empty <!--por si no se cumple-->
  			<li>Lo siento, no hay proyectos para mostrar ahora!</li>
  		@endforelse
  	@endif



  	//primera opcion
  	<?php foreach ($portafolio as $portafolioItem) {
  		echo "<li>" . $portafolioItem['title'] . "</li>";
  	} ?>
  	//segunda opcion
  	<?php foreach ($portafolio as $portafolioItem): ?>
  		<li> {{ $portafolioItem['title'] }}</li>
  	//tercer forma utilizando blade
  		@foreach($portafolio as $portafolioItem)
  			<li> {{ $portafolioItem['title'] }}</li>
  		@endforeach
  </ul>
@endsection