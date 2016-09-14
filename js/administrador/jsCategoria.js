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
            $("#frCategoriaInsertar").validate({
                rules: {
                    nombreCategoria: "required",
                    descripcionCategoria: "required"
                }, 
                messages: {
                    nombreCategoria: "Obligatorio",
                    descripcionCategoria: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    insertarCategoria();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function insertarCategoria(){
		var formData = new FormData(document.getElementById("frCategoriaInsertar"));        
		formData.append("accion", "insertar");
		$.ajax({
		url : "../../controladora/controlCategoria.php",
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
            $("#frCategoriaModificar").validate({
               rules: {
                    nombreCategoria: "required",
                    descripcionCategoria: "required"
                }, 
                messages: {
                    nombreCategoria: "Obligatorio",
                    descripcionCategoria: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarCategoria();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarCategoria(){
    var formData = new FormData(document.getElementById("frCategoriaModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../../controladora/controlCategoria.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#contenedorMensaje").html(data);
        consultarCategorias();
    });    
}
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarCategoria(idCategoria){
      
    if (confirm("Esta apunto de eliminar este categoria = " + idCategoria + " ?")) {
        $.post("../../controladora/controlCategoria.php", 
        {
            accion: "eliminar", 
            idCategoria : idCategoria
        },
        function(data)
        {               
            $('#contenedorMensaje').html(data);
            $('#contenedorFormulario').html("");
            consultarCategorias();
        });
    }
 }	
/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarCategoria(idCategoria_){    
    $.post("./fCategoria/frCategoriaModificar.php", 
    {
        idCategoria : idCategoria_
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
function consultarCategorias() {
     $('#contenedorLista').load("./fCategoria/frCategoriaConsultas.php");
}
