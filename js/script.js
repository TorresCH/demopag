$(document).ready(function(){

	$("menu").css({"height":$(window).height() + "px"});

	var flag = false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 200){
			if(!flag){
				

				$("header").css({"background-color": "#e66b19 "});
				flag = true;
			}
		}else{
			if(flag){
				

				$("header").css({"background-color": "transparent"});
				flag = false;
			}
		}


	});

});