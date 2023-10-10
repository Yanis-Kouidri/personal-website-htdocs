$("#click").click(function(){
	$("#look1").css("background-color", "#E82927");
})

$("#dom").change(function(){
	$("#look2").css("background-color", "#F24829");
})

$("#passe").mouseover(function(){
	$("#look3").css("background-color", "#DB6230");
})

$("#passe").mouseout(function(){
	$("#look3").css("background-color", "#FFFFFF");
})

$("#url").click(function(){
	window.open("https://api.jquery.com/category/events/");
})

$("#msg").click(function(){
	window.alert("Je ne sais qu'une chose, je ne sais rien. Platon");
})

