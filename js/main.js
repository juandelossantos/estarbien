function ir(id){
	
	var target = document.getElementById(id);
	var y = target.offsetTop;
	var scrollView = window.pageYOffset;
	var dif = y-scrollView;
	console.log(target);
	console.log("y = "+y+" scrollView = " + scrollView);
	console.log("y - scrollView = " + dif);
	
	

	if (scrollView < y){
		
		window.scrollBy(0,12);
		mover = setTimeout("ir(id)",10);
		

	} 

	var newScrollview = window.pageYOffset;
	console.log("nuevo scroll = "+ newScrollview);
	// if (scrollView === newScrollview) {
	// 	clearTimeout(mover);
	// }	
	
}

window.onload = function() {
	var source = document.getElementsByClassName('source');
	console.log(source);
	source[0].onclick = ir('formulario');
	//source[1].onclick = ir;
	//source[2].onclick = ir;


}
