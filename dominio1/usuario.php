<?php
class usuario{
	private	$idUsuario;
	private	$correoUsuario;
	private	$contrasenia;


	function usuario( $idUsuario, $correoUsuario, $contrasenia){
		$this->setidUsuario($idUsuario);
		$this->setcorreoUsuario($correoUsuario);
		$this->setcontrasenia($contrasenia);
	
	}

	public function setidUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}
	public function getidUsuario() {
		return $this->idUsuario;
	}

	public function setcorreoUsuario($correoUsuario) {
		$this->correoUsuario = $correoUsuario;
	}
	public function getcorreoUsuario() {
		return $this->correoUsuario;
	}

	public function setcontrasenia($contrasenia) {
		$this->contrasenia = $contrasenia;
	}
	public function getcontrasenia() {
		return $this->contrasenia;
	}	

}

?>