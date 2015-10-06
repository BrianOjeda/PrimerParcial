function BorrarCD(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarCD(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var cd =JSON.parse(retorno);	
		$("#idCD").val(cd.id);
		$("#cantante").val(cd.cantante);
		$("#titulo").val(cd.titulo);
		$("#anio").val(cd.año);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}

function Guardar()
{
		//var id=$("#idCD").val();
		var provincia=$("#provincia").val();
		var presidente=$("#presidente").val();
		var sexo=$("#sexo").val();
		var dni=$("#dni").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"Guardar",
			provincia:provincia,
			presidente:presidente,
			sexo:sexo,
			dni:dni	
		}
	});
	funcionAjax.done(function(retorno){
			//Mostrar("MostrarGrilla");
		$("#Contador").html("cantidad de agregados "+ retorno);	
		Mostrar("MostrarLogin");
		
	});
	funcionAjax.fail(function(retorno){	
		$("#Contador").html(retorno.responseText);	
	});	
}