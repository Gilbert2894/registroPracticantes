function cargarFormulario(direccion){
	$('#contenedorFormulario').load(direccion);
	$('#contenedorLista').html("");
	$('#contenedorMensaje').html("");
}
function cargarLista(direccion){
	$('#contenedorLista').load(direccion);
	$('#contenedorFormulario').html("");
	$('#contenedorMensaje').html("");
}
$(function (){
	$('#contenedorVisita').load("./indexVisita.php");
});

