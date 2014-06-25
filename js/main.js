function ir(){
	var target = document.getElementById('formulario');
	var y = target.offsetTop;
	var scrollView = window.pageYOffset;
	
	//console.log(y +","+ scrollView);
	

	if (scrollView<y){
		window.scrollBy(0,10);
		mover = setTimeout("ir()",10);

	} 

		
	
}

window.onload = function() {
	var source = document.getElementsByClassName('source');
	console.log(source);
	source[0].onclick = ir;
	source[1].onclick = ir;
	source[2].onclick = ir;


}
