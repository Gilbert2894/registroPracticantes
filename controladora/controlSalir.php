<?php	
	session_start();
	session_destroy();
	echo header("location:../vista/index.php");
?>