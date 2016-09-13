<?php
header("Content-Type: text/html;charset=utf-8");
class dtusers{
	function dtusers(){
	}

	function insertar($micompany){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO users(id, username, password, fname, lname, phone, cellphone, email)
					VALUES (".$micompany->getid().",
						'".$micompany->getusername()."',
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

			$query = "SELECT * FROM users";
			$result = @mysql_query($query);
			//echo "$query";
			while($row = mysql_fetch_array($result)){

	 			$micompany = new users( $row[0], $row[1], $row[2] , $row[3], $row[4], $row[5], $row[6], $row[7]);	
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

			$query = "DELETE FROM users WHERE id=".$id;
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

			$query = "SELECT * FROM users WHERE id = ".$id;
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$micompany = new users( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);

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
			$query = "UPDATE users SET
			username = '".$micompany->getusername()."',
			password='".$micompany->getpassword()."'
			fname='".$micompany->getfname()."',
			lname='".$micompany->getlname()."',
			phone='".$micompany->getphone()."',
			cellphone='".$micompany->getcellphone()."',
			email='".$micompany->getemail()."'
			WHERE id = ".$micompany->getid()."";
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
