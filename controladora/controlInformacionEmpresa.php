<?php	
	include ("../data/dtInformacionEmpresa.php");
	include ("../data/dtConexion.php");
	include ("../dominio/informacionEmpresa.php");
	
	class controlInformacionEmpresa {
		
		function controlInformacionEmpresa(){
		}	
		
		function modificar(){

			$descripcionEmpresa1= $_POST['1'];

			$descripcionEmpresa2= $_POST['2'];

			$descripcionEmpresa3= $_POST['3'];

			$descripcionEmpresa4= $_POST['4'];

			$descripcionEmpresa5= $_POST['5'];

			$descripcionEmpresa6= $_POST['6'];

			$descripcionEmpresa7= $_POST['7'];
			
			$vision = new informacionEmpresa( 1, $descripcionEmpresa1, "");
			$mision = new informacionEmpresa( 2, $descripcionEmpresa2, "");
			$telefono = new informacionEmpresa( 3, $descripcionEmpresa3, "");
			$direccion = new informacionEmpresa( 4, $descripcionEmpresa4, "");
			$email = new informacionEmpresa( 5, $descripcionEmpresa5, "");
			$nuestraEmpresa = new informacionEmpresa( 6, $descripcionEmpresa6, "");
			$nuestroCompromiso = new informacionEmpresa( 7, $descripcionEmpresa7, "");
			
						
			$dtInformacionEmpresa = new dtInformacionEmpresa;

			if($dtInformacionEmpresa->modificar($vision)==true){	
				
				echo "Registro vision modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar vision</p><br>";
			}

			if($dtInformacionEmpresa->modificar($mision)==true){	
				
				echo "Registro mision modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar mision</p><br>";
			}
			if($dtInformacionEmpresa->modificar($telefono)==true){	
				
				echo "Registro telefono modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar telefono</p><br>";
			}
			if($dtInformacionEmpresa->modificar($direccion)==true){	
				
				echo "Registro direccion modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar direccion</p><br>";
			}
			if($dtInformacionEmpresa->modificar($email)==true){	
				
				echo "Registro email modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar email</p><br>";
			}
			if($dtInformacionEmpresa->modificar($nuestraEmpresa)==true){	
				
				echo "Registro Nuestra empresa modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar Nuestra empresa</p><br>";
			}
			if($dtInformacionEmpresa->modificar($nuestroCompromiso)==true){	
				
				echo "Registro nuestro compromiso modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar nuestro compromiso</p><br>";
			}
		}
		
	}
	
	$op = $_POST['opcion'];
	$control = new controlInformacionEmpresa;

	if($op=="modificar"){
	$control->modificar();
	}
?>