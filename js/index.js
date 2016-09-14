function cargarContenedor(direccion){
    $('#contenedorPrincipal').load(direccion);
}
function cargarLista(direccion){
    $('#contenedorLista').load(direccion);
    $('#contenedorFormulario').html("");
    $('#contenedorMensaje').html("");
}
$(function (){
    $('#contenedorVisita').load("./indexVisita.php");
});//Carga el contador de visitas
$(function (){
    $('#contenedorPrincipal').load("./cliente/fgaleria/galeria.php");
});//Carga la galeria automaticamente en el index
$(function (){
    $.post("../controladora/controlCotizar.php", 
        {
            accion : "cotizarTemp"            
        },
        function(data)
        {               
            $('#contenedorCotizar').html(data);
        }); 
});//Carga la galeria automaticamente en el index

function cargarGaleria(idCategoria_, nombre_){
    $.post("./cliente/fgaleria/galeriaCategoria.php", 
        {
            idCategoria : idCategoria_,
            nombre : nombre_
        },
        function(data)
        {               
            $('#contenedorPrincipal').html(data);
        });    
}

function cargarArticulo(buscar_){
    $.post("./cliente/fgaleria/galeriaArticulo.php", 
        {
            buscar : buscar_
        },
        function(data)
        {               
            $('#contenedorArticulo').html(data);
        });    
}