<?php
	session_start();
	
	if($_SESSION['nombre']){
		session_destroy();
		header("location: ../../vista/index.php");
	}else{
		header("location: ../../vista/index.php");
	}
?>