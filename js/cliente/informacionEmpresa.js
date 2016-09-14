/* 
====================
  MODULO CONSULTAR
====================
*/
function consultarInformacion(idInformacionEmpresa){    
    $.post("./quienesSomos.php", 
    {
        idInformacionEmpresa : idInformacionEmpresa
    },
    function (data)
    {               
        $('#contenedorFormulario').html(data);
    });
}

