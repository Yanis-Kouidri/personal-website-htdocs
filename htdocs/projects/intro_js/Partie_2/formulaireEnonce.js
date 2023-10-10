/*
$("#send").click(function(){
	 window.alert("Valeur : "+$('#ext').val()+" Option : "+$('#ext option:selected').text());
	 if ($('#ext option:selected').text() == "fr") {
		window.open("afnic.fr");
	}
	else {
		window.open("nic.com") ;
	} 
}) 
*/

$("#ext").change(function(){
	if ($('#ext option:selected').text() == "fr") {
		$("#ipv4").prop("checked", true) ;
	}
})

$("#send").click(function(){
	$(this).after("<br>"+"Extension : "+$('#ext option:selected').text()+"<br>"+"Protocole : "+
	$("input[type='radio'][name='ip']:checked").val() );
	 
})


	