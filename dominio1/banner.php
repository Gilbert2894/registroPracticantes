<?php 
class banner{
	private	$idBanner;
	private	$imagenBanner;
	private	$descripcionBanner;


	function banner( $idBanner, $imagenBanner, $descripcionBanner){
		$this->setidBanner($idBanner);
		$this->setimagenBanner($imagenBanner);
		$this->setdescripcionBanner($descripcionBanner);
	
	}

	public function setidBanner($idBanner) {
		$this->idBanner = $idBanner;
	}
	public function getidBanner() {
		return $this->idBanner;
	}

	public function setimagenBanner($imagenBanner) {
		$this->imagenBanner = $imagenBanner;
	}
	public function getimagenBanner() {
		return $this->imagenBanner;
	}

	public function setdescripcionBanner($descripcionBanner) {
		$this->descripcionBanner = $descripcionBanner;
	}
	public function getdescripcionBanner() {
		return $this->descripcionBanner;
	}	

}

?>