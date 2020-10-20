<?php
//================================================
//mipaginaweb.com = Route::('/', function())
Route::get('/', function(){
	return = "Hola desde la pagina de inicio";
});
//================================================
//mipagibaweb.com/contacto = Route::('contacto', function())
Route::get('contacto', function(){
	return = "Hola desde la pagina de contacto";
});
//================================================
//tambien hay otro tipo de rutas:
Route::get()
Route::post()
//este tipo de rutas ya no son soportadas por los navegadores actuales, es por eso que utilizaremos estas rutas mas adelante.
Route::put()
Route::patch()
Route::delete()
//================================================
//hay ocasiones en las que tendremos que pasar parametros atra vez de las urls, un ejemplo seria.

//Crearemos una ruta llamada saludos, y queremos pasarle como parametro el nombre del usuario para saludarlo.dentro de llaves {parametro} le decimo el parametro que vamos a pasarle, en este caso, sera nombre, y este parametro lo tenemos que recibir por la funcion anonima. function($nombre)

//definiendo la ruta de esta manera le estamos diciendo que el parametro es obligatorio.
Ruute::get('saludo/{nombre}', function($nombre){
	return "Muy buenas tardes" . $nombre;
	// proyecto/saludos/(MiNombre)
	//tendre como resultado.
	//Muy buenas tardes Juan
});
//=================================================
//pero si no queremos que el parametro sea obligatorio.
 //hacemos lo siguiente.
//solo agregamos un ? al final del parametro, y si no le pasamos un nombre,
//lo vamos a tratar como un empleado
Ruute::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Muy buenas tardes" . $nombre;
	// proyecto/saludos/(MiNombre)
	//tendre como resultado.
	//Muy buenas tardes Juan
});
//================================================
// RUTAS CON NOMBRE u Named Routes
Ruute::get('contactos', function(){
	return "session de contactos";
});
//supogamos que tenemos 5 lugares en nuestro proyecto, en la cual hacemos referencia a la URL contactos

//=================================================
//voy a crear una ruta que vaya al home.
Route::get('/', function(){
	//y vamos agregar unos links con la URL de contacto
	echo "<a href='contactos'>contactos 1</a><br>";
	echo "<a href='contactos'>contactos 2</a><br>";
	echo "<a href='contactos'>contactos 3</a><br>";
	echo "<a href='contactos'>con tactos 4</a><br>";
	echo "<a href='contactos'>contactos 5</a><br>";
	//estos links nos llevan a la pagina de contactos.
});
//================================================
//dato el caso en que que el cliente cambie el nombre de la ruta, seria algo tedioso cambiar una a una las direcciones, para evitar ese tipo de problemas, haremos lo siguiente:


Ruute::get('contactos', function(){
	return "session de contactos";
})->name('contactos');
//para evitar este problema le daremos nombres a las rutas.
//para esto le pasamos el metodo "name" y le pasamos el nombre que queremos })->name('contactos');

Route::get('/', function(){
	//ahora, cada vez que quiera hacer una referencia a esta ruta, vamos hacerlo mendiante el nombre de la ruta y no por el URL, laravel tiene un metodo llamado route, al que le pasaremos el parametro el nombre de la ruta y nos devuelva automaticamente la URL.

	//De esta forma, estoy haciendo referencia a la ruta con el nombre contactos.
	echo "<a href='" . route('contactos') . "'>contactos 1</a><br>";
	echo "<a href='" . route('contactos') . ">contactos 2</a><br>";
	echo "<a href='" . route('contactos') . ">contactos 3</a><br>";
	echo "<a href='" . route('contactos') . ">con tactos 4</a><br>";
	echo "<a href='" . route('contactos') . ">contactos 5</a><br>";

});
//================================================
?>

