@extends('layout')

@section('titulo')
  Home
@endsection
@section('content') <!--recibe como parametro el nombre de donde vamos a insertar esta session, y lo haremos en el content que acabamos de definir-->

<!--========CONTENIDO UNICO DE LA VISTA HOME!-->
<!--Aqui lo que hara es buscar un yield('content') en la plantilla layout para insertar el <h1>Hola amigo!</h1> -->
  <h1>Hola amigo!</h1>
@endsection