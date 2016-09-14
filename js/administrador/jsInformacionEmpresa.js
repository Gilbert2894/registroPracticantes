(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frInformacionEmpresaModificar").validate({
               rules: {
                    descripcionEmpresa1: "required",
                    descripcionEmpresa2: "required"
                }, 
                messages: {
                    descripcionEmpresa1: "Obligatorio",
                    descripcionEmpresa2: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarInformacionEmpresa();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    }); 
} ) (jQuery, window, document);

function modificarInformacionEmpresa(){
	var formData = new FormData(document.getElementById("frInformacionEmpresaModificar"));
	formData.append("opcion", "modificar");
	$.ajax({
	url : "../../controladora/controlInformacionEmpresa.php",
	type : "post",
	dataType : "html",
	data : formData,
	cache : false,
	contentType : false,
	processData : false
	}).done(function(data) {
		$("#contenedorMensaje").html(data);
	}); 	
}	
