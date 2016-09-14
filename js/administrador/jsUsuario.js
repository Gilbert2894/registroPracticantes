(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frUsuarioConsultar").validate({
                rules: {
                    username: "required",
                    contrasenia: "required"
                },
                messages: {
                    username: "Obligatorio",
                    contrasenia: "Obligatorio"
                },
                submitHandler: function(form) {
                    consultarUsuario();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function consultarUsuario(){
    var formData = new FormData(document.getElementById("frUsuarioConsultar"));
    formData.append("accion", "consultar");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         actualizar();
    });
}


(function($,W,D){
    var JQUERY4U = {};

    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frUsuarioModificar").validate({
               rules: {
                    contraseniaAutual: "required",
                    contrasenia1: "required",
                    contrasenia2: "required"
                },
                messages: {
                    contraseniaAutual: "Obligatorio",
                    contrasenia1: "Obligatorio",
                    contrasenia2: "Obligatorio"
                },
                submitHandler: function(form) {
                    modificarUsuario();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);

function modificarUsuario(){
    var formData = new FormData(document.getElementById("frUsuarioModificar"));
    formData.append("accion", "modificar");
    $.ajax({
    url : "../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
        $("#contenedorMensaje").html(data);
        cargarListaProductoLote();
    });

}
$(function(){
    $('#contenedorMensaje').html("");
});

function salir(){
    $.post("../controladora/controlUsuario.php",
    {
        accion : "salir"
    },
    function (data)
    {
        //$('#contenedor').html(data);
        actualizar();
    });
}

function actualizar(){
     location.reload(true);
}


/*
====================
 Recuperar contraseña / actualizar
====================
*/

(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frRestaurar").validate({
                rules: {
                    contrasenia1: "required",
                    contrasenia2: {
                        equalTo: "#contrasenia2",
                        required: true
                    }
                },
                messages: {
                    contrasenia1: "required",
                    contrasenia2: {
                        equalTo: "Contraseña no coinciden",
                        required: "required"
                    }
                },
                submitHandler: function(form) {
                    frRestaurar();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function frRestaurar(){
    var formData = new FormData(document.getElementById("frRestaurar"));
    formData.append("accion", "restaurarContrasenia");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         $('#myModalr').modal('show');
         $('#contenedorMensaje').html(data);
    });
}

/*
====================
 Envia key al correo
====================
*/

(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frRecuperar").validate({
                rules: {
                     correoUsuario: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                     correoUsuario: {
                        required: "required",
                        email: "Correo no valido"
                    }
                },
                submitHandler: function(form) {
                    frRecuperar();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function frRecuperar(){
    var formData = new FormData(document.getElementById("frRecuperar"));
    formData.append("accion", "email");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         $('#myModal').modal('show');
         $('#contenedorMensaje').html(data);
    });
}

/*
====================
Cambiar contraseña / agustes del perfil
====================
*/


(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frModificarContrasenia").validate({
                rules: {
                    contrasenia1: "required",
                    contrasenia2: "required",
                    contrasenia3: {
                        equalTo: "#contrasenia2",
                        required: true
                    }
                },
                messages: {
                    contrasenia1: "required",
                    contrasenia2: "required",
                    contrasenia3: {
                        equalTo: "Contraseña no coinciden",
                        required: "required"
                    }
                },
                submitHandler: function(form) {
                    frModificarContrasenia();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function frModificarContrasenia(){
    var formData = new FormData(document.getElementById("frModificarContrasenia"));
    formData.append("accion", "contrasenia");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         $('#myModal').modal('show');
         $('#contenedorMensaje').html(data);
    });
}



/*
====================
Cambiar correo / agustes del perfil
====================
*/


(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frModificarCorreo").validate({
                rules: {
                    contrasenia: "required",
                    correoNuevo: "required"
                },
                messages: {
                    contrasenia: "required",
                    correoNuevo: "required"
                    //Validar formato para correo PENDIENTE
                },
                submitHandler: function(form) {
                    modificarCorreo();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function modificarCorreo(){
    var formData = new FormData(document.getElementById("frModificarCorreo"));
    formData.append("accion", "cambiarCorreo");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         $('#myModal').modal('show');
         $('#contenedorMensaje').html(data);
    });
}

/*
====================
Cambiar correo VALIDACION/ agustes del perfil
====================
*/


(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL ={
        setupFormValidation: function()
        {
            $("#frValidarCorreo").validate({
                rules: {
                    contrasenia: "required"
                },
                messages: {
                    contrasenia: "required"
                    //Validar formato para correo PENDIENTE
                },
                submitHandler: function(form) {
                    modificarCorreoUsuario();
                }
            });
        }
    }
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

} ) (jQuery, window, document);


function modificarCorreoUsuario(){
    var formData = new FormData(document.getElementById("frValidarCorreo"));
    formData.append("accion", "cambiarCorreoUsuario");
    $.ajax({
    url : "../../controladora/controlUsuario.php",
    type : "post",
    dataType : "html",
    data : formData,
    cache : false,
    contentType : false,
    processData : false
    }).done(function(data) {
         $('#myModal').modal('show');
         $('#contenedorMensaje').html(data);
    });
}
