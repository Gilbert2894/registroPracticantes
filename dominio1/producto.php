<?php
class producto{
	private	$codigoProducto;
	private	$idCategoria;
	private	$nombreProducto;
	private	$descripcionProducto;
	private	$imagenLink;
	private	$contadorTop;


	function producto( $codigoProducto, $idCategoria, $nombreProducto, $descripcionProducto, $imagenLink, $contadorTop){
		$this->setcodigoProducto($codigoProducto);
		$this->setidCategoria($idCategoria);
		$this->setnombreProducto($nombreProducto);
		$this->setdescripcionProducto($descripcionProducto);
		$this->setimagenLink($imagenLink);
		$this->setcontadorTop($contadorTop);
	}

	public function setcodigoProducto($codigoProducto) {
		$this->codigoProducto = $codigoProducto;
	}
	public function getcodigoProducto() {
		return $this->codigoProducto;
	}

	public function setidCategoria($idCategoria) {
		$this->idCategoria = $idCategoria;
	}
	public function getidCategoria() {
		return $this->idCategoria;
	}

	public function setnombreProducto($nombreProducto) {
		$this->nombreProducto = $nombreProducto;
	}
	public function getnombreProducto() {
		return $this->nombreProducto;
	}
	public function setdescripcionProducto($descripcionProducto) {
		$this->descripcionProducto = $descripcionProducto;
	}
	public function getdescripcionProducto() {
		return $this->descripcionProducto;
	}
	public function setimagenLink($imagenLink) {
		$this->imagenLink = $imagenLink;
	}
	public function getimagenLink() {
		return $this->imagenLink;
	}

	public function setcontadorTop($contadorTop) {
		$this->contadorTop = $contadorTop;
	}
	public function getcontadorTop() {
		return $this->contadorTop;
	}


}

?>