	
// Funciones para escuchar los eventos 
function agregarEvento(elemento, tipo, funcion){
	'use strict';
	if (elemento && elemento.addEventListener) {
		elemento.addEventListener(tipo, funcion, false)
	} else if (elemento && elemento.attachEvent) {
		elemento.attachEvent('on'+tipo,funcion);
	}
};

function quitarEvento(elemento, tipo, funcion){
	'use strict';
	if (elemento && elemento.removeEventListener) {
		elemento.removeEventListener(tipo, funcion, false)
	} else if (elemento && elemento.detachEvent) {
		elemento.detachEvent('on'+tipo, funcion);
	}
}

//Función que hace el scroll vertical de la página de acuerdo al elemento seleccionado
function ir(target){
	'use strict';
	var y = target.offsetTop - 80; // se resta la altura del header para ver adecuadamente los títulos
	var scrollView = window.pageYOffset;
	var dif = y-scrollView;
	
	// aqui se realiza el scroll
	if (scrollView < y){
		window.scrollBy(0,12);
		var mover = setTimeout(function(){
			ir(target);	
		},10);
		//se asigna la nueva posición de la página a una nueva variable.
		var newScrollview = window.pageYOffset;
	} 
	//con esta parte se determina si ya se llegó al target deseado y se para la ejecución del timeOut.
	if (scrollView === newScrollview) {
		clearTimeout(mover);
	}	
	
}
/* 	Esta función determina los puntos iniciales y finales para los scroll
	deseados y ejecuta la funcion ir() que hace el scroll, si se desea incluir más saltos se debe identificar en el html los ids inicio y fin y aquí crear las variables y activar el listener.
*/
function defineInicioFinal(){
	'use strict';
	var s1 = document.getElementById('source1');
	var s2 = document.getElementById('source2');
	var s3 = document.getElementById('source3');
	var s4 = document.getElementById('source4');

	var t1 = document.getElementById('target1');
	var t2 = document.getElementById('target2');
	var t3 = document.getElementById('target3');
	var t4 = document.getElementById('target4');

	agregarEvento(s1,'click',function(){ir(t1)});
	agregarEvento(s2,'click',function(){ir(t2)});
	agregarEvento(s3,'click',function(){ir(t3)});
	agregarEvento(s4,'click',function(){ir(t4)});
	
} 

function validaForm() {
	var nombre = document.getElementById('nombre').value;
	var email = document.getElementById('email').value;
	var telefono = document.getElementById('telefono').value;
	var cuando = document.getElementById('cuando').value;

	if (nombre && email && telefono && cuando != " ") {
		var r =confirm("Enviar?");
		if (r == true) {alert('enviado');}
	} else {
		alert('datos insuficientes');
	}
	return false; //cuando se termine de programar la validación quitar el return para que pueda procesar el form en php.
}

function init(){
	defineInicioFinal();
	if(document.getElementById('invitaForm') != undefined) {
	document.getElementById('invitaForm').onsubmit = validaForm;
	}
	
}

window.onload = init;
