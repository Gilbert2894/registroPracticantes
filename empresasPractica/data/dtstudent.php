<?php
header("Content-Type: text/html;charset=utf-8");
class dtstudent{
	function dtstudent(){
	}

	function insertar($micompany){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO student(carnet, nameStu, lnameStu, cedula, carrera, phone, dob)
					VALUES (".$micompany->getcarnet().",
						'".$micompany->getnameStu()."',
						'".$micompany->getlnameStu()."',
						'".$micompany->getcedula()."',
						'".$micompany->getcarrera()."', 
						'".$micompany->getphone()."',
						'".$micompany->getdob()."')";
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

			$query = "SELECT * FROM student";
			$result = @mysql_query($query);
			//echo "$query";
			while($row = mysql_fetch_array($result)){

	 			$micompany = new student( $row[0], $row[1], $row[2] , $row[3], $row[4], $row[5], $row[6]);	
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

			$query = "DELETE FROM student WHERE carnet=".$id;
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

			$query = "SELECT * FROM student WHERE carnet = ".$id;
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$micompany = new student( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

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
			$query = "UPDATE student SET
			nameStu = '".$micompany->getnameStu()."',
			lnameStu='".$micompany->getlnameStu()."'
			cedula='".$micompany->getcedula()."',
			carrera='".$micompany->getcarrera()."',
			phone='".$micompany->getphone()."',
			dob='".$micompany->getdob()."'
			WHERE carnet = ".$micompany->getcarnet()."";
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
