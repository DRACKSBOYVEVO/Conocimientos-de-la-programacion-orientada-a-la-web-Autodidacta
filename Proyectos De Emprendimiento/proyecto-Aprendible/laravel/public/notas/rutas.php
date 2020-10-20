<?php
Route::get('/', function(){
	return "Hola amigo";
});
//Le estamos diciendo que el parametro tiene que ser obligatorio.
Route::get('saludo/{nombre}', function($nombre){
	return "Hola".$nombre;
});

//Le estamos diciendo que el parametro sea obcional.
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Hola".$nombre;
});
?>

