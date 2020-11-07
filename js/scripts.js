	$("#formulario").submit(function(evento){
		//alert("se omitio el evento");
		$.get("./compras/compras.php",function(e){
			//alert("");
		}).fail(function (){
			evento.preventDefault();	
		});
	});





