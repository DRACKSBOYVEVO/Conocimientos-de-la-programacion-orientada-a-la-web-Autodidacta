// Defino unas cuantas funciones
function primeraFuncion(){
	
	segundaFuncion();
}
function segundaFuncion(){
	
	tercerafuncion();
}
function terceraFuncion(){
	
	cuartaFuncion();
}
function cuartaFuncion(){
	titulo.innerHTML = "Este es un NUEVO titulo";
}

// Esta es la función original

var titulo = document.getElementById("mititulo");
titulo.onclick = function(){
	
	primeraFuncion();
	
}
