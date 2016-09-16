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
            $("#frStudentInsertar").validate({
                rules: {
                    carnet: "required",
                    nameStu: "required",
                    lnameStu: "required",
                    cedula: "required",
                    carrera: "required",
                    phone: "required",
                    dob: "required"
                }, 
                messages: {

                     carnet: "Obligatorio",
                    nameStu: "Obligatorio",
                    lnameStu: "Obligatorio",
                    cedula: "Obligatorio",
                    carrera: "Obligatorio",
                    phone: "Obligatorio",
                    dob: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    insertarStudent();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

	function insertarStudent(){
		var formData = new FormData(document.getElementById("frStudentInsertar"));        
		formData.append("accion", "insertar");
		$.ajax({
		url : "../../controladora/controlStudent.php",
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
            $("#frStudentModificar").validate({
               rules: {
                    nameStu: "required",
                    lnameStu: "required",
                    cedula: "required",
                    carrera: "required",
                    phone: "required",
                    dob: "required"
                }, 
                messages: {
                    nameStu: "Obligatorio",
                    lnameStu: "Obligatorio",
                    cedula: "Obligatorio",
                    carrera: "Obligatorio",
                    phone: "Obligatorio",
                    dob: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarStudent();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarStudent(){
    var formData = new FormData(document.getElementById("frStudentModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../../controladora/controlStudent.php",
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
        consultarStudents();
    });    
}
/* 
====================
  MODULO ELIMINAR
====================
*/
function eliminarStudent(carnet){
      
    if (confirm("Esta apunto de eliminar este estudiante = " + carnet + " ?")) {
        $.post("../../controladora/controlStudent.php", 
        {
            accion: "eliminar", 
            carnet : carnet
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
            consultarStudents();
        });
    }
 }	
/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarStudent(carnet_){    
    $.post("./fStudent/frStudentModificar.php", 
    {
        carnet : carnet_
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
function consultarStudents() {
     $('#contenedorLista').load("./fStudent/frStudentConsultas.php");
}
