<?php

class dtUsuario{
	function dtUsuario(){
	}
	function consulta($username, $contrasenia){
		$con = new dtConexion;
		// se declara una lista enlazada

		$miusuario = false;
		//$correo =sha1($correo);
		$encriptada =sha1($contrasenia);//Encripta la contraseña

		if($con->conectar()==true){

			$query = "SELECT id, username, password FROM users
			WHERE username = '".$username."' AND password = '".$encriptada."';";
			$result = @mysql_query($query);
			
			if($row = mysql_fetch_array($result)){
	 			$miusuario = new users( $row[0], $row[1], $row[2]);

			}
			if (!$miusuario){
				return false;
			}else{
				return $miusuario;
			}
		}
	}

	function consultarCantrasenia($contrasenia){
		$con = new dtConexion;

		session_start();
		$idUsuario = $_SESSION['idUsuario'];

		$miusuario = false;
		$encriptada =sha1($contrasenia);//Encripta la contraseña

		if($con->conectar()==true){

			$query = "SELECT id, username, password FROM users
			WHERE id = '$idUsuario' AND password = '$encriptada';";
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$miusuario = new usuario( $row[0], $row[1], $row[2]);

			}
			if (!$miusuario){
				return false;
			}else{
				return $miusuario;
			}
		}
	}

	function recuperarContraseniaUsuario($contraseniaNueva, $idUsuario, $contraseniaAntigua){
		$con = new dtConexion;

		$contraseniaNueva =sha1($contraseniaNueva);//Encripta la contraseña
		if($con->conectar()==true){
			$query = "UPDATE tbUsuario
			SET	contrasenia= '$contraseniaNueva'
			WHERE idUsuario = $idUsuario AND contrasenia = '$contraseniaAntigua'";

			@mysql_query($query);
			$result = mysql_affected_rows();//Verifica cuantas filas an cido afectadas para ver si se actualizo o no la operacion
		}
		if (!$result){
			return false;
		}else{
			return true;
		}
	}

	function cambiarContrasenia($contraseniaAntigua, $contraseniaNueva, $idUsuario){
		$con = new dtConexion;


		$contraseniaAntigua = sha1($contraseniaAntigua);//Encripta la contraseña
		$contraseniaNueva = sha1($contraseniaNueva);

		if($con->conectar()==true){
			$query = "UPDATE tbUsuario
			SET	contrasenia= '$contraseniaNueva'
			WHERE idUsuario = $idUsuario AND contrasenia = '$contraseniaAntigua'";

			@mysql_query($query);
			
			$result = mysql_affected_rows();//Verifica cuantas filas an cido afectadas para ver si se actualizo o no la operacion
		}
		if ($result){
			return false;
		}else{
			return true;
		}
	}



	function consultaRestaurar($correo){
		$con = new dtConexion;
		$miusuario = false;
		if($con->conectar()==true){
			$correo = sha1($correo);
			$query = "SELECT idUsuario, correoUsuario, contrasenia FROM tbUsuario
			WHERE correoUsuario = '".$correo."';";
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$miusuario = new usuario( $row[0], $row[1], $row[2]);
			}
			if (!$miusuario){
				return false;
			}else{
				return $miusuario;
			}
		}
	}

	function modificarCorreo($correoAntiguo, $correoNuevo, $idUsuario, $contrasenia){
		$con = new dtConexion;
		$contrasenia = sha1($contrasenia);
		if($con->conectar()==true){
			$query = "UPDATE tbUsuario
			SET	correoUsuario= '$correoNuevo'
			WHERE idUsuario = $idUsuario AND correoUsuario = '$correoAntiguo' AND contrasenia = '$contrasenia'";

			@mysql_query($query);
			$result = mysql_affected_rows();//Verifica cuantas filas an cido afectadas para ver si se actualizo o no la operacion
		}
		if (!$result){
			return false;
		}else{
			return true;
		}
	}
}
?>
