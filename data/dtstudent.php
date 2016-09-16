<?php
header("Content-Type: text/html;charset=utf-8");
class dtstudent{
	function dtstudent(){
	}

	function insertar($miStudent){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "CALL sp_insertarStudent(".$miStudent->getcarnet().",
						'".$miStudent->getnameStu()."',
						'".$miStudent->getlnameStu()."',
						'".$miStudent->getcedula()."',
						'".$miStudent->getcarrera()."', 
						'".$miStudent->getphone()."',
						'".$miStudent->getdob()."')";

			print_r($query);
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

			$query = "CALL sp_consultasStudent()";
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

			$query = "CALL sp_eliminarStudent($id)";
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

			$query = "CALL sp_consultaStudent($id)";
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

			$query = "CALL sp_modificarStudent(".$miStudent->getcarnet().",
						'".$miStudent->getnameStu()."',
						'".$miStudent->getlnameStu()."',
						'".$miStudent->getcedula()."',
						'".$miStudent->getcarrera()."', 
						'".$miStudent->getphone()."',
						'".$miStudent->getdob()."')";

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
