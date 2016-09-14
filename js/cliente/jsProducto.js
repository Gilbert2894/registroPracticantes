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
            $("#formBuscar").validate({
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
        var formData = new FormData(document.getElementById("formBuscar"));        
        $.ajax({
        url : "./cliente/fgaleria/galeriaBuscar.php",
        type : "post",
        dataType : "html",
        data : formData,
        cache : false,
        contentType : false,
        processData : false
        }).done(function(data) {
            $("#contenedorPrincipal").html(data);
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

/* 
====================
  MODULO MODIFICAR
====================
*/
	
/* 
====================
  MODULO REFRESCAR IMAGEN
====================
*/

/*========== Insertar ==========*/


/*========== Modificar ==========*/
//Muestra imagen mini para modificar


/* 
====================
  MODULO REFRESCAR
====================
*/