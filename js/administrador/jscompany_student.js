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
            $("#frCompany_studentInsertar").validate({
                rules: {
                    carnet: "required",
                    idCom: "required",
                    id_user: "required"
                }, 
                messages: {
                    carnet: "Obligatorio",
                    idCom: "Obligatorio",
                    id_user: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    insertarCompany_student();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function insertarCompany_student(){
		var formData = new FormData(document.getElementById("frCompany_studentInsertar"));        
		formData.append("accion", "insertar");
		$.ajax({
		url : "../../controladora/controlCompany_student.php",
		type : "post",
		dataType : "html",
		data : formData,
		cache : false,
		contentType : false,
		processData : false
		}).done(function(data) {
            if (data=="true") {
                bootbox.alert("Registro guardado correctamente");
            }else{

                bootbox.alert("Error al guardar");
            }
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
            $("#frCompany_studentModificar").validate({
               rules: {
                    carnet: "required",
                    idCom: "required",
                    id_user: "required"
                }, 
                messages: {
                    carnet: "Obligatorio",
                    idCom: "Obligatorio",
                    id_user: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarCompany_student();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarCompany_student(){
    var formData = new FormData(document.getElementById("frCompany_studentModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../../controladora/controlCompany_student.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        if (data=="true") {
                bootbox.alert("Registro modificado correctamente");
            }else{

                bootbox.alert("Error al modificar");
            }
        consultarCompany_students();
    });    
}
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarCompany_student(id){
      
    if (confirm("Esta apunto de eliminar este empresa estudiante = " + id + " ?")) {
        $.post("../../controladora/controlCompany_student.php", 
        {
            accion: "eliminar", 
            id : id
        },
        function(data)
        {               
            $('#contenedorMensaje').html(data);
            $('#contenedorFormulario').html("");
            if (data=="true") {
                bootbox.alert("Se elimino correctament");
            }else{

                bootbox.alert("Error al eliminar");
            }
            consultarCompany_students();
        });
    }
 }	
/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarCompany_student(id_){    
    $.post("./fCompany_student/frCompany_studentModificar.php", 
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
function consultarCompany_students() {
     $('#contenedorLista').load("./fCompany_student/frCompany_studentConsultas.php");
}
