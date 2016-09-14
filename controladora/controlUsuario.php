<?php
include ("../data/dtUsuario.php");
include ("../data/dtConexion.php");
include ("../dominio/users.php");

class ControlUsuario {

	function ControlUsuario(){
	}

	function salir(){
		session_start();
		session_destroy();
		echo header("location:../vista/index.php");

	}

	function consultar(){
		session_start();
		$data = new dtUsuario;

		$username = $_POST['username'];
		$contrasenia = $_POST['contrasenia'];


		$miUsiario =$data->consulta($username, $contrasenia);
		if(!$miUsiario){
			echo "No entro";
			//header("../vista/menuAdministrador.php");
		}else{
			$_SESSION['idUsuario']= $miUsiario->getid();
			$_SESSION['correoUsuario']= $miUsiario->getusername();
			$_SESSION['correoVerificar']= $username;

			echo header("location:../vista/index.php");
			//header("../vista/index.php");

		}
	}

	function restaurarContrasenia(){

		$data = new dtUsuario;

		$contraseniaAntigua = $_POST['key1'];
		$idUsuario = $_POST['key2'];
		$contraseniaNueva = $_POST['contrasenia1'];


		if(!$data->recuperarContraseniaUsuario($contraseniaNueva, $idUsuario, $contraseniaAntigua)){
			echo "ERROR al tratar de recuperar contraseña";
		}else{
			echo "Contraseña recuperada correctemente";
		}
	}

	function cambiarContraseniaUsuario(){
		session_start();
		$data = new dtUsuario;
		$idUsuario = $_SESSION['idUsuario'];

		$contraseniaAntigua = $_POST['contrasenia1'];
		$contraseniaNueva = $_POST['contrasenia2'];

		$miUsiario =$data->cambiarContrasenia($contraseniaAntigua, $contraseniaNueva, $idUsuario);
		if($miUsiario){
			echo "ERROR al tratar de cambiar contraseña";
		}else{
			echo "Cambios realizados correctemente";
		}
	}

	function cambiarCorreoUsuario(){

		$data = new dtUsuario;
		$correoAntiguo = $_POST['key'];//correo antiguo
		$idUsuario = $_POST['key2'];//ID USER
		$correoNuevo = $_POST['key3'];//correo nuevo

		$contrasenia = $_POST['contrasenia'];

		$miUsiario =$data->modificarCorreo($correoAntiguo, $correoNuevo, $idUsuario, $contrasenia);
		if(!$miUsiario){
			echo "ERROR al tratar de cambiar correo";
		}else{
			echo "Cambios realizados correctemente";
		}
	}



	function email(){
		session_start();
		$msj = "";
		if($_SERVER["REQUEST_METHOD"] === "POST")
		{
			//form submitted

			//check if other form details are correct

			//verify captcha
			$recaptcha_secret = "6LdwKBwTAAAAAFZ1Pxq_wkmlwBqs4ciuQQtKuBRs";
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
			$response = json_decode($response, true);
			if($response["success"] === true)
			{
				$data = new dtUsuario;


				$correo = $_POST['correoUsuario'];


				$miUsiario =$data->consultaRestaurar($correo);
				if(!$miUsiario){
					echo "<p class='text-danger glyphicon glyphicon-warning-sign'>Lo lamentamos pero el correo que usted consulto no es valido</p>";
				}else{

					$link = "http://enterprisesolution.web44.net/vista/administrador/restaurar.php?key1=".$miUsiario->getcontrasenia()."&key2=".$miUsiario->getidUsuario()."";


					$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
					$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

					// Cabeceras adicionales
					$cabeceras .= 'To: www.solucionestotales.net'."\r\n";//Por defecto
					$cabeceras .= 'From:  <www.solucionestotales.net>' . "\r\n";
					//$cabeceras .= 'Bcc: felipe@solucionestotales.net' . "\r\n";


					$contenido = "Link de recuperacion<br/><a href='$link' >Recuerar Contraseña</a><br/><br/>";
					$contenido .= "Website: www.solucionestotales.net<br/>";

					$contenido .= "Si usted no reconoce la fuente de este correo favor hacer caso omiso.<br/>Favor no responder este correo";

					if (mail($correo, "Soluciones Totales" , $contenido, $cabeceras) ){
						$msj = "<p class='text-success glyphicon glyphicon-ok'>Estimado usuario favor ingrese a la bandeja de entrada de su correo
						<br/>Favor dirijase al siguiente enlace de recuperacion</p>";
					}else{
						$msj = "<p class='text-danger glyphicon glyphicon-warning-sign'> Lo sentimos en este momento no podemos realizar la operacion<br/>Intentelo mas tarde</p>";
					}//mail($miUsiario->getcorreoUsuario(), "Soluciones Totales" ...
				}
		 }else {
		 	$msj = "<p class='text-danger glyphicon glyphicon-warning-sign'> Lo sentimos en este momento no podemos realizar la operacion<br/>Favor ingrese sel captcha para continuar o el captcha no es valido</p>";
		 }


	}else {
		$msj = "<p class='text-danger glyphicon glyphicon-warning-sign'> Lo sentimos en este momento no podemos realizar la operacion<br/>ERROR INESPERADO INTENTELO DE NUEVO</p>";
	}

	echo $msj;
}


	function cambiarCorreo(){
		session_start();
		$data = new dtUsuario;

		$correo = $_SESSION['correoVerificar'];
		$contrasenia = $_POST['contrasenia'];
		$correoNuevo = sha1($_POST['correoNuevo']);



		$miUsiario =$data->consultarCantrasenia($contrasenia);
		if(!$miUsiario){
			echo "Lo lamentamos pero la contrasenia no es valida";
		}else{

			$link = "http://enterprisesolution.web44.net/vista/administrador/validarCorreo.php?key=".$miUsiario->getcorreoUsuario()."&key2=".$miUsiario->getidUsuario()."&key3=".$correoNuevo."";


			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= 'To: www.solucionestotales.net'."\r\n";//Por defecto
			$cabeceras .= 'From:  <www.solucionestotales.net>' . "\r\n";
			//$cabeceras .= 'Bcc: felipe@solucionestotales.net' . "\r\n";


			$contenido = "Link para validar correo<br/><a href='$link' >Cambiar Correo</a><br/><br/>";
			$contenido .= "Website: www.solucionestotales.net<br/>";

			$contenido .= "Si usted no reconoce la fuente de este correo favor hacer caso omiso.<br/>Favor no responder este correo";

			if (mail($correo, "Soluciones Totales" , $contenido, $cabeceras) ){
				$msj = "<p class='text-success glyphicon glyphicon-ok'>Estimado usuario favor ingrese a la bandeja de entrada de su correo
				<br/>Favor dirijase al siguiente enlace para cambiar su correo</p>";
			}else{
				$msj = "<p class='text-danger glyphicon glyphicon-warning-sign'> Lo sentimos en este momento no podemos realizar la operacion<br/>Intentelo mas tarde</p>";
			}
			echo $msj;
		}
	}


}

$accion = $_POST['accion'];
$control = new ControlUsuario;
if($accion=="consultar"){
	$control->consultar();
}
if($accion=="salir"){
	$control->salir();
}

if($accion=="restaurarContrasenia"){
	$control->restaurarContrasenia();
}

if($accion=="email"){
	$control->email();
}

if($accion=="contrasenia"){
	$control->cambiarContraseniaUsuario();
}

if($accion=="cambiarCorreo"){
	$control->cambiarCorreo();
}

if($accion=="cambiarCorreoUsuario"){
	$control->cambiarCorreoUsuario();
}





?>
