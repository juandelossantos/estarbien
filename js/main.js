function ir(){
	var target = document.getElementById('formulario');
	var x = target.offsetLeft;
	var y = target.offsetTop;
	console.log(x + "-" + y);
	var mover = setInterval(function(){
		for(var i = 0; i<1000; i++){
			console.log(mover);
			scrollTo(x,i);
		}
	},3000);
	
	
	return false;
}

window.onload = function() {
	var source = document.getElementsByClassName('source');
	console.log(source);
	source[0].onclick = ir;
	source[1].onclick = ir;
	source[2].onclick = ir;


}
