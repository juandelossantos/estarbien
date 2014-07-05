'use strict';
var slider = document.getElementById('slider');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');

var colorBoton = document.getElementsByTagName('button')[0].style.backgroundColor;
var nuevoColorBoton = "#000";
btn1.style.backgroundColor=nuevoColorBoton;

function mover(left){
  'use strict';
  slider.style.left=left;
  slider.style.transition = "all 0.6s ease";
  slider.style.WebkitTransition = "all 0.6s ease";
  slider.style.MozTransition = "all 0.6s ease";
  slider.style.msTransition = "all 0.6s ease";
  slider.style.OTransition = "all 0.6s ease";

  if (left === "-0%"){
  	btn1.style.backgroundColor=nuevoColorBoton;
  	btn2.style.backgroundColor=colorBoton;
  	btn3.style.backgroundColor=colorBoton;
  	btn4.style.backgroundColor=colorBoton;
  	
  } else if (left === "-100%") {
  	btn1.style.backgroundColor=colorBoton;
  	btn2.style.backgroundColor=nuevoColorBoton;
  	btn3.style.backgroundColor=colorBoton;
  	btn4.style.backgroundColor=colorBoton;
  	
  } else if (left === "-200%") {
  	btn1.style.backgroundColor=colorBoton;
  	btn2.style.backgroundColor=colorBoton;
  	btn3.style.backgroundColor=nuevoColorBoton;
  	btn4.style.backgroundColor=colorBoton;
  	
  } else if (left === "-300%") {
  	btn1.style.backgroundColor=colorBoton;
  	btn2.style.backgroundColor=colorBoton;
  	btn3.style.backgroundColor=colorBoton;
  	btn4.style.backgroundColor=nuevoColorBoton;
  	
  }

}

function activaSlider(){
	'use strict';
		var pos = 100;
	var timer = window.setInterval(function(){
		var lefts = (pos).toString();
		var lefts = "-"+lefts+"%";
		mover(lefts);
		pos = pos + 100;
		if (pos === 400) {
			pos = 0;
		};
	}, 4000);
}

function ejecutaSlider(){
	'use strict';
	btn1.onclick = function(){mover(0)};
  btn2.onclick = function(){mover("-100%")};
  btn3.onclick = function(){mover("-200%")};
  btn4.onclick = function(){mover("-300%")};
  activaSlider();
  

}

window.onload = ejecutaSlider;