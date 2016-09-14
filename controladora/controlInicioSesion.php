<?php
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	
	if(isset($usuario)){
		include ("../../data/DBConexion.php");
		$con = new DBConexion;
		
		if($con->conectar()==true){
			
			session_start();
			
			$consulta = ("SELECT * FROM tbUsuario WHERE correoUsuario='$usuario' AND contrasenia='$password'"); 
			$resultado = mysql_query($consulta) or die (mysql_error());
			$fila = mysql_fetch_array($resultado);
			
			if(!$fila['ididUsuario']){
				header("location: ../../vista/index.php");
			}else{
				if($fila['ididUsuario'] == 1){
					$_SESSION['idUsuario'] = $fila['idUsuario'];
					$_SESSION['nombre'] = $fila['correoUsuario'];
					
					header("Location: ../../vista/inicioAdministrador.php");
				}
			}
		}
	}else{
		header("location: ../../vista/index.php");
	}
?>