$("#rose").click(function(){
	$('TR').css("background-color", "#FC62DE");
})

$("#violet").click(function(){
	$('TR').css("background-color", "#FC5B83");
})

$("#origin").click(function(){
	$('TR').css("background-color", "rgb(10,150,200");
})

$(function () {
	$('TR').css("background-color","rgb(10,150,200");
	var couleur ;
	
	$('TR').mouseover(function () {
	couleur = $(this).css("background-color") ;
	$(this).css("background", "red");
	});
	

  $('TR').mouseout(function () {
    $(this).css("background", couleur);
  });
	
	
	$('*').css("font-size","32px");	
}) ;

