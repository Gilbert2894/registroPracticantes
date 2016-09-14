<?php
class productotop{
	private	$idProductoTop;
	private	$codigoProducto;


	function productotop( $idProductoTop, $codigoProducto){
		$this->setidProductoTop($idProductoTop);
		$this->setcodigoProducto($codigoProducto);
	
	}

	public function setidProductoTop($idProductoTop) {
		$this->idProductoTop = $idProductoTop;
	}
	public function getidProductoTop() {
		return $this->idProductoTop;
	}

	public function setcodigoProducto($codigoProducto) {
		$this->codigoProducto = $codigoProducto;
	}
	public function getcodigoProducto() {
		return $this->codigoProducto;
	}

}

?>