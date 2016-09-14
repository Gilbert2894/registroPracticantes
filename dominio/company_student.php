<?php
class company_student{
	private	$id;
	private	$carnet;
	private	$idCom;
	private $id_user;


	function company_student( $id, $carnet, $idCom, $id_user){
		$this->setid($id);
		$this->setcarnet($carnet);
		$this->setidCom($idCom);
		$this->setid_user($id_user);
	
	}

	public function setid($id) {
		$this->id = $id;
	}
	public function getid() {
		return $this->id;
	}

	public function setcarnet($carnet) {
		$this->carnet = $carnet;
	}
	public function getcarnet() {
		return $this->carnet;
	}

	public function setidCom($idCom) {
		$this->idCom = $idCom;
	}
	public function getidCom() {
		return $this->idCom;
	}

	public function setid_user($id_user) {
		$this->id_user = $id_user;
	}
	public function getid_user() {
		return $this->id_user;
	}		

}

?>