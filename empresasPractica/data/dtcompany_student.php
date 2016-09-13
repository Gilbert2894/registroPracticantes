<?php
header("Content-Type: text/html;charset=utf-8");
class dtcompany_student{
	function dtcompany_student(){
	}

	function insertar($micompanystudent){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO company_student(id, carnet, idCom, id_user)
					VALUES (".$micompanystudent->getid().",
						'".$micompanystudent->getcarnet()."',
						'".$micompanystudent->getidCom()."',
							'".$micompanystudent->getid_user()."' )";
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

			$query = "SELECT * FROM company_student";
			$result = @mysql_query($query);
			//echo "$query";
			while($row = mysql_fetch_array($result)){

	 			$micompanystudent = new company_student( $row[0], $row[1], $row[2] , $row[3]);	
				array_push($lista, $micompanystudent);
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

			$query = "DELETE FROM company_student WHERE id=".$id;
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

			$query = "SELECT * FROM company_student WHERE id = ".$id;
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$micompanystudent = new company_student( $row[0], $row[1], $row[2], $row[3]);

			}
			if (!$micompanystudent){
				return false;
			}else{
				return $micompanystudent;
			}
		}
	}

	function modificar($micompanystudent){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "UPDATE company_student SET
			carnet = '".$micompanystudent->getcarnet()."',
			idCom='".$micompanystudent->getidCom()."',
			id_user='".$micompanystudent->getid_user()."'
			WHERE id = ".$micompanystudent->getid()."";
				//echo "$query";
			$result = @mysql_query($query);
			if (!$micompanystudent){
				return false;
			}else{
				return true;
			}
		}
	}
}
?>
