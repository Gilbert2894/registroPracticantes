<?php
include("dtConexion.php");
if ($_REQUEST['accion']=="nombre_users") {
	$con = new dtConexion;
	$id=$_REQUEST['id_usuario'];
	$nombreCompleto;
	$name;
	$lname;	
	if($con->conectar()==true){
			$query = "SELECT fname,lname FROM users WHERE id=$id;";
			$result = @mysql_query($query);
			$row = mysql_fetch_array($result);
			
			$name=$row['fname'];
			$lname=$row['lname'];
			//echo "$query";
		}
	$nombreCompleto=$name." ".$lname;
	echo $nombreCompleto;
}
?>