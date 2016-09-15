/* 
====================
  MODULO GUARDAR
====================
*/
(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frCompanyInsertar").validate({
                rules: {
                    idCom: "required",
                    nameCom: "required",
                    addressCom: "required",
                    phoneCom: "required",
                    emailCom: "required"
                }, 
                messages: {

                     idCom: "Obligatorio",
                    nameCom: "Obligatorio",
                    addressCom: "Obligatorio",
                    phoneCom: "Obligatorio",
                    emailCom: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    insertarCompany();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function insertarCompany(){
		var formData = new FormData(document.getElementById("frCompanyInsertar"));        
		formData.append("accion", "insertar");
		$.ajax({
		url : "../../controladora/controlCompany.php",
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

/* 
====================
  MODULO MODIFICAR
====================
*/
(function($,W,D){
    var JQUERY4U = {};
 
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frCompanyModificar").validate({
               rules: {
                    nameCom: "required",
                    addressCom: "required",
                    phoneCom: "required",
                    emailCom: "required"
                }, 
                messages: {
                   nameCom: "Obligatorio",
                    addressCom: "Obligatorio",
                    phoneCom: "Obligatorio",
                    emailCom: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarCompany();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarCompany(){
    var formData = new FormData(document.getElementById("frCompanyModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../../controladora/controlCompany.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#contenedorMensaje").html(data);
        consultarCompanys();
    });    
}
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarCompany(idCom){
      
    if (confirm("Esta apunto de eliminar esta empresa = " + idCom + " ?")) {
        $.post("../../controladora/controlCompany.php", 
        {
            accion: "eliminar", 
            idCom : idCom
        },
        function(data)
        {               
            $('#contenedorMensaje').html(data);
            $('#contenedorFormulario').html("");
            consultarCompanys();
        });
    }
 }	
/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarCompany(idCom_){    
    $.post("./fCompany/frCompanyModificar.php", 
    {
        idCom : idCom_
    },
    function (data)
    {               
        $('#contenedorFormulario').html(data);
    });
}
/* 
====================
  MODULO REFRESCAR
====================
*/
function consultarCompanys() {
     $('#contenedorLista').load("./fCompany/frCompanyConsultas.php");
}
