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
            $("#frBannerInsertar").validate({
                rules: {
                    descripcionBanner: "required",
                    imagen: "required"
                }, 
                messages: {
                    descripcionBanner: "Obligatorio",
                    imagen: "Obligatorio"
                },
                submitHandler: function(form) {                 
                    insertarBanner();
                }
            });
        }
    }    
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);
    function insertarBanner(){
        var formData = new FormData(document.getElementById("frBannerInsertar"));        
        formData.append("op", "insertar");
        $.ajax({
        url : "../../controladora/controlBanner.php",
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
function modificarBannerForm(idBanner_){
    $.post("./fBanner/frBannerModificar.php", 
        {
            idBanner : idBanner_
        },
        function(data)
        {               
            $('#contenedorFormulario').html(data);
        });    
}

//Para refrescar la busqueda al eliminar
function consultarBanner(){
    $.post("./fBanner/frBannerConsultas.php", 
        {},
        function(data)
        {               
            $('#contenedorLista').html(data);
        });    
}//Para refrescar la busqueda al eliminar

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
            $("#frBannerModificar").validate({
                rules: {
                    nombreBanner: "required"
                }, 
                messages: {
                    nombreBanner: "Obligatorio"
                }, 
                submitHandler: function(form) {                 
                    modificarBanner();
                }
            });
        }
    }   
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
 
} ) (jQuery, window, document);

function modificarBanner(){
    var formData = new FormData(document.getElementById("frBannerModificar"));
    formData.append("op", "modificar");
    $.ajax({
    url : "../../controladora/controlBanner.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#contenedorMensaje").html(data);
        consultarBanner();
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
            $('#img_destino').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $("#img_destino").show();
    }
}
$(document).ready(function() {
    $("#alert").hide();
    $("#img_destino").hide();
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