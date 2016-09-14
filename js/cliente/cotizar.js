function cotizarMas(codigoProducto){
    $.post("../controladora/controlCotizar.php", 
        {
            codigoProducto : codigoProducto,
            accion : "cotizar"
        },
        function(data)
        {               
            $('#contenedorCotizar').html(data);
        });    
}

function cotizarMenos(codigoProducto){
    $.post("../controladora/controlCotizar.php", 
        {
            codigoProducto : codigoProducto,
            accion : "eliminar"
        },
        function(data)
        {               
            $('#contenedorCotizar').html(data);
        });    
}

function cotizar_Mas(codigoProducto){
    $.post("../../../controladora/controlCotizar.php", 
        {
            codigoProducto : codigoProducto,
            accion : "cotizar"
        },
        function(data)
        {               
            $('#contenedorCotizar').html(data);
        });    
}

function cotizar_Menos(codigoProducto){
    $.post("../../../controladora/controlCotizar.php", 
        {
            codigoProducto : codigoProducto,
            accion : "eliminar"
        },
        function(data)
        {               
            $('#contenedorCotizar').html(data);
        });    
}