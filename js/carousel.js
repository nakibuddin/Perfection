$(document).ready(function(){
	
	$(window).resize(function(){
			
		var x = $(".carousel-inner").height();
		var d = (x-400)/3;
		if ($(".carousel-inner").height() <= 628) {

			d = 0;
	    	document.getElementById("carousel-indicators").style.bottom = "10px";

		}else{

			document.getElementById("carousel-indicators").style.bottom = d + "px";
	   	}
	});

	$(window).on('load',function(){
		// if (window.history.length > 1)
		var x = $(".carousel-inner").height();
		var d = (x-400)/3;

  		if ($(".carousel-inner").height() <= 628) {

			d = 0;
	    	document.getElementById("carousel-indicators").style.bottom = "10px";

		}else{

			document.getElementById("carousel-indicators").style.bottom = d + "px";
	   	}
	});
});