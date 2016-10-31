<?php
header("Content-Type: text/html;charset=utf-8");

class dtusers{
	function dtusers(){
	}

	function insertar($user){
		$con = new MongoClient();
		$db=$con->registroPracticantes;
		$collection=$db->usuarios;
		$obj=array("usuario" => $user->getusername(),"contrasenia" =>$user->getpassword(),"nombre"=>$user->getfname(),"apellido"=>$user->getlname(),"telefono"=>$user->getphone(),"celular"=>$user->getcellphone(),"correo"=>$user->getemail());
		try {
			$collection->insert($obj);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	function consultas(){
		$con = new MongoClient();
		$db=$con->registroPracticantes;
		$collection=$db->usuarios;
		$lista = array();
		$cursor=$collection->find();
		foreach ($cursor as $value) {
			$user = new users;
			$user->setid($value['_id']);
			$user->setusername($value['usuario']);
			$user->setpassword($value['contrasenia']);
			$user->setfname($value['nombre']);
			$user->setlname($value['apellido']);
			$user->setphone($value['telefono']);
			$user->setcellphone($value['celular']);
			$user->setemail($value['correo']);
			array_push($lista, $user);
		}
		return $lista;
	}


	function eliminar($id){
		$con = new MongoClient();
		$db=$con->registroPracticantes;
		$collection=$db->usuarios;
		$obj=array("_id" => new MongoId($id));
		try {
			$collection->remove($obj);
			return true;
			
		} catch (Exception $e) {
			
			return false;
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
		$con = new MongoClient();
		$db=$con->registroPracticantes;
		$collection=$db->usuarios;
		$obj=array("usuario" => $user->getusername(),"contrasenia" =>$user->getpassword(),"nombre"=>$user->getfname(),"apellido"=>$user->getlname(),"telefono"=>$user->getphone(),"celular"=>$user->getcellphone(),"correo"=>$user->getemail());
		try {
			$collection->update(array('_id'=new MongoId($persona->getid())),array('$set'=>$obj));
			return true;
		} catch (Exception $e) {
			return false;
		}
	}
}
?>
