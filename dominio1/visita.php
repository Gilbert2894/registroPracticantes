<?php
class visita{
	private	$idVisita;
	private	$contador;


	function visita( $idVisita, $contador){
		$this->setidVisita($idVisita);
		$this->setcontador($contador);
	
	}

	public function setidVisita($idVisita) {
		$this->idVisita = $idVisita;
	}
	public function getidVisita() {
		return $this->idVisita;
	}

	public function setcontador($contador) {
		$this->contador = $contador;
	}
	public function getcontador() {
		return $this->contador;
	}

}

?>