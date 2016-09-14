$(function(){
    $.post("../vista/fVisita/frVisitaConsulta.php",
    {},
    function (data)
    {
        $('#contenedorVisita').html(data);
    });    
});