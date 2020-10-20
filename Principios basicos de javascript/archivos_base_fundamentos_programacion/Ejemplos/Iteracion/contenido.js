var coleccion = [500,500,500,500,500,500,500,500,500,500,500];

var total = 0;

for ( var i = 0 ; i < coleccion.length ; i++ ) {
	// Añadir el valor actual al total
	total = total + coleccion[i];
}

// Una vez salimos del bucle
alert("El valor total es: "+total);
