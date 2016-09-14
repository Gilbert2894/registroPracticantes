<?php
class categoria{
	private	$idCategoria;
	private	$nombreCategoria;
	private	$descripcionCategoria;


	function categoria( $idCategoria, $nombreCategoria, $descripcionCategoria){
		$this->setidCategoria($idCategoria);
		$this->setnombreCategoria($nombreCategoria);
		$this->setdescripcionCategoria($descripcionCategoria);
	
	}

	public function setidCategoria($idCategoria) {
		$this->idCategoria = $idCategoria;
	}
	public function getidCategoria() {
		return $this->idCategoria;
	}

	public function setnombreCategoria($nombreCategoria) {
		$this->nombreCategoria = $nombreCategoria;
	}
	public function getnombreCategoria() {
		return $this->nombreCategoria;
	}

	public function setdescripcionCategoria($descripcionCategoria) {
		$this->descripcionCategoria = $descripcionCategoria;
	}
	public function getdescripcionCategoria() {
		return $this->descripcionCategoria;
	}	

}

?>