<?php
header("Content-Type: text/html;charset=utf-8");
class dtCompany{
	function dtCompany(){
	}

	function insertar($micompany){
		$con = new dtConexion;
		if($con->conectar()==true){
			$query = "INSERT INTO company(nameCom, addressCom, phoneCom, emailCom)
					VALUES ('".$micompany->getnameCom()."',
						'".$micompany->getaddressCom()."',
						'".$micompany->getphoneCom()."',
							'".$micompany->getemailCom()."' )";
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

			$query = "SELECT * FROM company";
			$result = @mysql_query($query);
			//echo "$query";
			while($row = mysql_fetch_array($result)){

	 			$micompany = new company( $row[0], $row[1], $row[2] , $row[3], $row[4]);	
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

			$query = "DELETE FROM company WHERE idCom=".$id;
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

			$query = "SELECT * FROM company WHERE idCom = ".$id;
			$result = @mysql_query($query);

			if($row = mysql_fetch_array($result)){
	 			$micompany = new company( $row[0], $row[1], $row[2], $row[3], $row[4]);

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
			$query = "UPDATE company SET
			nameCom = '".$micompany->getnameCom()."',
			addressCom='".$micompany->getaddressCom()."',
			phoneCom='".$micompany->getphoneCom()."',
			emailCom='".$micompany->getemailCom()."'
			WHERE idCom = ".$micompany->getidCom()."";
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
