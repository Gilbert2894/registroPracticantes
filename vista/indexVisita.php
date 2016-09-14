<?php
	include ("../controladora/controlObtenerVisita.php");

	$control = new controlObtenerVisita;
	$visita =$control->obtenerVisitas();
	echo "Visitas : $visita";
?>
