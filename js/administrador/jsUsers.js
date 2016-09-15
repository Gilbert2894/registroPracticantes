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
            $("#frUsersInsertar").validate({
                rules: {
                    id: "required",
                    username: "required",
                    password: "required",
                    fname: "required",
                    lname: "required",
                    phone: "required",
                    cellphone: "required",
                    email: "required"
                }, 
                messages: {

                     id: "Obligatorio",
                    username: "Obligatorio",
                    password: "Obligatorio",
                    fname: "Obligatorio",
                    lname: "Obligatorio",
                    phone: "Obligatorio",
                    cellphone: "Obligatorio",
                    email: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    insertarUsers();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function insertarUsers(){
		var formData = new FormData(document.getElementById("frUsersInsertar"));        
		formData.append("accion", "insertar");
		$.ajax({
		url : "../../controladora/controlUsers.php",
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
            $("#frUsersModificar").validate({
               rules: {
                    username: "required",
                    password: "required",
                    fname: "required",
                    lname: "required",
                    phone: "required",
                    cellphone: "required",
                    email: "required"
                }, 
                messages: {
                    username: "Obligatorio",
                    password: "Obligatorio",
                    fname: "Obligatorio",
                    lname: "Obligatorio",
                    phone: "Obligatorio",
                    cellphone: "Obligatorio",
                    email: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarUsers();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarUsers(){
    var formData = new FormData(document.getElementById("frUsersModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../../controladora/controlUsers.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#contenedorMensaje").html(data);
        consultarUserss();
    });    
}
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarUsers(id){
      
    if (confirm("Esta apunto de eliminar este usuario = " + id + " ?")) {
        $.post("../../controladora/controlUsers.php", 
        {
            accion: "eliminar", 
            id : id
        },
        function(data)
        {               
            $('#contenedorMensaje').html(data);
            $('#contenedorFormulario').html("");
            consultarUserss();
        });
    }
 }	
/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarUsers(id_){    
    $.post("./fUsers/frUsersModificar.php", 
    {
        id : id_
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
function consultarUserss() {
     $('#contenedorLista').load("./fUsers/frUsersConsultas.php");
}
