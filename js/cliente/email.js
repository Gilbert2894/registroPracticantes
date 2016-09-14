/* 
====================
  Enviar Correos
====================
*/
(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#fremail").validate({
                rules: {
                    nombre: "required",
                    correo: {
                        required: true,
                        email: true 
                    },
                    correo2: {
                        equalTo: "#correo", 
                        required: true,
                        email: true
                    },
                    asunto:"required",
                    mensaje:"required"

                }, 
                messages: {
                    nombre: "Obligatorio",
                    correo: {
                        required: "Obligatorio",
                        email: "Correo debe ser valido"
                    },
                    correo2: {
                        equalTo: "Correo no coincide", 
                        required: "Obligatorio",
                        email: "Correo debe ser valido"
                    },
                    asunto:"Obligatorio",
                    mensaje:"Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    sendemail();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function sendemail(){
		var formData = new FormData(document.getElementById("fremail"));        
		//formData.append("accion", "insertar");
		$.ajax({
		url : "./cliente/enviar.php",
		type : "post",
		dataType : "html",
		data : formData,
		cache : false,
		contentType : false,
		processData : false
		}).done(function(data) {
            $('#myModal').modal('show');
			$("#contenedorMensaje").html(data);
		});     	
	}

    /* 
====================
  Enviar Cotizacion
====================
*/
(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frcotizar").validate({
                rules: {
                    nombre: "required",
                    correo: {
                        required: true,
                        email: true 
                    },
                    correo2: {
                        equalTo: "#correo", 
                        required: true,
                        email: true
                    },
                    asunto:"required",
                    mensaje:"required"

                }, 
                 messages: {
                    nombre: "<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>",
                    correo: {
                        required: "<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>",
                        email: "<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>Correo debe ser valido"
                    },
                    correo2: {
                        equalTo: "<p class='text-danger glyphicon glyphicon-warning-sign'>Correo no coincide</p>", 
                        required: "<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>",
                        email: "<p class='text-danger glyphicon glyphicon-warning-sign'>Correo debe ser valido</p>"
                    },
                    asunto:"<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>",
                    mensaje:"<p class='text-danger glyphicon glyphicon-warning-sign'>Obligatorio</p>"
                },
                submitHandler: function(form) {                 
                    sendCotizacion();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

    function sendCotizacion(){
        var formData = new FormData(document.getElementById("frcotizar"));        
        //formData.append("accion", "insertar");
        $.ajax({
        url : "./cliente/cotizar/emailCotizacion.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
        }).done(function(data) {
            $('#myModal').modal('show');
            $("#contenedorMensaje").html(data);
        });         
    }