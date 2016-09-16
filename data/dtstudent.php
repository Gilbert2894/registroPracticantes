<?php
header("Content-Type: text/html;charset=utf-8");
class dtstudent{
	function dtstudent(){
	}

	function insertar($miStudent){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO student(carnet, nameStu, lnameStu, cedula, carrera, phone, dob)
					VALUES (".$miStudent->getcarnet().",
						'".$miStudent->getnameStu()."',
						'".$miStudent->getlnameStu()."',
						'".$miStudent->getcedula()."',
						'".$miStudent->getcarrera()."', 
						'".$miStudent->getphone()."',
						'".$miStudent->getdob()."')";
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

	 			$miStudent = new student( $row[0], $row[1], $row[2] , $row[3], $row[4], $row[5], $row[6]);	
				array_push($lista, $miStudent);
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
	 			$miStudent = new student( $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);

			}
			if (!$miStudent){
				return false;
			}else{
				return $miStudent;
			}
		}
	}

	function modificar($miStudent){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "UPDATE student SET
			nameStu = '".$miStudent->getnameStu()."',
			lnameStu='".$miStudent->getlnameStu()."',
			cedula='".$miStudent->getcedula()."',
			carrera='".$miStudent->getcarrera()."',
			phone='".$miStudent->getphone()."',
			dob='".$miStudent->getdob()."'
			WHERE carnet = ".$miStudent->getcarnet()."";
				//echo "$query";
			$result = @mysql_query($query);
			if (!$miStudent){
				return false;
			}else{
				return true;
			}
		}
	}
}
?>
