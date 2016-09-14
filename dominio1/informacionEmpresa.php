<?php
class informacionEmpresa{
	private	$idInformacionEmpresa;
	private	$descripcionEmpresa;
	private	$titulo;


	function informacionEmpresa($idInformacionEmpresa, $descripcionEmpresa,$titulo){
		$this->setidInformacionEmpresa($idInformacionEmpresa);
		$this->setdescripcionEmpresa($descripcionEmpresa);
		$this->settitulo($titulo);
	
	}

	public function setidInformacionEmpresa($idInformacionEmpresa) {
		$this->idInformacionEmpresa = $idInformacionEmpresa;
	}
	public function getidInformacionEmpresa() {
		return $this->idInformacionEmpresa;
	}

	public function setdescripcionEmpresa($descripcionEmpresa) {
		$this->descripcionEmpresa = $descripcionEmpresa;
	}
	public function getdescripcionEmpresa() {
		return $this->descripcionEmpresa;
	}
	public function settitulo($titulo) {
		$this->titulo = $titulo;
	}
	public function gettitulo() {
		return $this->titulo;
	}

}

?>