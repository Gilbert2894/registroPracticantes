<?php
header("Content-Type: text/html;charset=utf-8");
class dtusers{
	function dtusers(){
	}

	function insertar($micompany){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "CALL sp_insertarUsers('".$micompany->getusername()."',
						'".$micompany->getpassword()."',
						'".$micompany->getfname()."',
						'".$micompany->getlname()."', 
						'".$micompany->getphone()."',
						'".$micompany->getcellphone()."',
						'".$micompany->getemail()."')";
			$result = @mysql_query($query);
			//echo "$query";
			if (!$result){
				return false;
			}else{
				return true;
			}
		}
	}

	function consultas(){
		$con = new dtConexion;
		// se declara una lista enlazada
		$lista = array();

		if($con->conectar()==true){

			$query = "CALL sp_consultasUsers()";
			$result = @mysql_query($query);
			//echo "$query";
			while($row = mysql_fetch_array($result)){

	 			$micompany = new users( $row[0], $row[1] , $row[3], $row[4], $row[5], $row[6], $row[7]);	
				array_push($lista, $micompany);
			}
			if (!$lista){
				return false;
			}else{
				return $lista;
			}
		}
	}


	function eliminar($id){
		$con = new dtConexion;
		if($con->conectar()==true){

			$query = "CALL sp_eliminarUsers($id)";
			$result = @mysql_query($query);

			if (!$result){
				return false;
			}else{
				return $result;
			}
		}
	}

	function consulta($id){
		$con = new dtConexion;
		// se declara una lista enlazada
		$miCalidad;

		if($con->conectar()==true){

			$query = "CALL sp_consultaUsers($id)";
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$micompany = new users( $row[0], $row[1],$row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);

			}
			if (!$micompany){
				return false;
			}else{
				return $micompany;
			}
		}
	}

	function modificar($micompany){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "CALL sp_modificarUsers(".$micompany->getid().",
						'".$micompany->getusername()."',
						'".$micompany->getpassword()."',
						'".$micompany->getfname()."',
						'".$micompany->getlname()."',
						'".$micompany->getphone()."',
						'".$micompany->getcellphone()."',
							'".$micompany->getemail()."')";
				//echo "$query";
			$result = @mysql_query($query);
			if (!$micompany){
				return false;
			}else{
				return true;
			}
		}
	}
}
?>
