
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
$( document ).ready(function() {

	var id_usuario=$("#user").val();
	$.ajax({
        url: '../../data/dt_user.php',
        data: {accion: 'nombre_users', id_usuario: id_usuario},
        type: "POST",
        success: function(result) {
        	document.getElementById("myspan").textContent=result;
        }
    });

});