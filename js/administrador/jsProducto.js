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
            $("#frProductoInsertar").validate({
                rules: {
                    codigoProducto: "required",
                    nombreProducto: "required",
                    descripcionProducto: "required",
                    imagen: "required"
                }, 
                messages: {
                    codigoProducto: "Obligatorio",
                    nombreProducto: "Obligatorio",
                    descripcionProducto: "Obligatorio",
                    imagen: "Obligatorio"
                },
                submitHandler: function(form) {                 
                    insertarProducto();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
	function insertarProducto(){
		var formData = new FormData(document.getElementById("frProductoInsertar"));        
		formData.append("op", "insertar");
		$.ajax({
		url : "../../controladora/controlProducto.php",
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
  MODULO CONSULTAR
====================
*/

(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frProductoBuscar").validate({
                rules: {
                    buscar: "required"
                }, 
                messages: {
                    buscar: "Obligatorio"
                },
                submitHandler: function(form) {                 
                    buscarProducto();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    }); 
} ) (jQuery, window, document);
    function buscarProducto(){
        var formData = new FormData(document.getElementById("frProductoBuscar"));        
        formData.append("op", "buscar");
        $.ajax({
        url : "./fProducto/frProductoConsultas.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
        }).done(function(data) {
            $("#contenedorLista").html(data);
        });         
    }
function modificarProductoForm(codigoProducto_){
    $.post("./fProducto/frProductoModificar.php", 
        {
            codigoProducto : codigoProducto_
        },
        function(data)
        {               
            $('#contenedorFormulario').html(data);
        });    
}   



function consultarProducto(buscar){
    $.post("./fProducto/frProductoConsultas.php", 
        {
            op : "buscar",
            buscar : buscar
        },
        function(data)
        {               
            $('#contenedorLista').html(data);
        });    
}//Para refrescar la busqueda al eliminar
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarProducto(codigoProducto_, buscar){
      
    if (confirm("¿Esta apunto de eliminar este producto = " + codigoProducto_ + " ?")) {
		$.post("../../controladora/controlProducto.php", 
	    {
		    op: "eliminar", 
		    codigoProducto : codigoProducto_
	    },
	    function(data)
	    {               
	    	$('#contenedorMensaje').html(data);
            consultarProducto(buscar);//Para refrescar la busqueda al eliminar
    	});
    }
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
            $("#frProductoModificar").validate({
                rules: {
                    nombreProducto: "required",
                    descripcionProducto: "required"
                }, 
                messages: {
                    nombreProducto: "Obligatorio",
                    descripcionProducto: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarProducto();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarProducto(){
	var formData = new FormData(document.getElementById("frProductoModificar"));
	formData.append("op", "modificar");
	$.ajax({
	url : "../../controladora/controlProducto.php",
	type : "post",
	dataType : "html",
	data : formData,
	cache : false,
	contentType : false,
	processData : false
	}).done(function(data) {
		$("#contenedorMensaje").html(data);
        consultarProducto($("#codigoProducto").val());
	});
 	
}	
/* 
====================
  MODULO REFRESCAR IMAGEN
====================
*/

/*========== Insertar ==========*/
function mostrarImagen(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#vistaPrevia').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $("#vistaPrevia").show();
    }
}
$(document).ready(function() {
    $("#alert").hide();
    $("#vistaPrevia").hide();
    $("#imagen").change(function() {
        $("#alert").hide();
        mostrarImagen(this);
    });    
});//Muestra imagen mini para insertar

/*========== Modificar ==========*/
function mostrarImagenModificar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#img_destinoModificar').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $("#img_destinoModificar").show();
    }
}
$(document).ready(function() {
    $("#alert").hide();
    $("#img_destinoModificar").show();
    $("#imagen").change(function() {
        $("#alert").hide();
        mostrarImagenModificar(this);
    });    
});//Muestra imagen mini para modificar


/* 
====================
  MODULO REFRESCAR
====================
*/