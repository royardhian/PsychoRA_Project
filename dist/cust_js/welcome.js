function focusFunction(){
	$("body").css("background-color","#aaa");
	$("body").css("transition","background-color 500ms");
	$(".form-signin").css("background-color","#eee");
	$(".form-signin").css("transition","background-color 500ms");
	$(".form-signin").css("box-shadow","10px 10px 10px grey");
	$(".form-signin").css("transition","box-shadow 500ms");
}

function blurFunction(){
	$("body").css("background","#eee");
	$("body").css("transition","background-color 500ms");
	$(".form-signin").css("background-color","#aaa");
	$(".form-signin").css("transition","background-color 500ms");
	$(".form-signin").css("box-shadow","");
	$(".form-signin").css("transition","box-shadow 500ms");
}
