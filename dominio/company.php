<?php
class company{
	private	$idCom;
	private	$nameCom;
	private	$addressCom;
	private $phoneCom;
	private $emailCom;


	function company( $idCom, $nameCom, $addressCom, $phoneCom, $emailCom){
		$this->setidCom($idCom);
		$this->setnameCom($nameCom);
		$this->setaddressCom($addressCom);
		$this->setphoneCom($phoneCom);
		$this->setemailCom($emailCom);
	
	}
	function companys( $nameCom, $addressCom, $phoneCom, $emailCom){
		$this->setnameCom($nameCom);
		$this->setaddressCom($addressCom);
		$this->setphoneCom($phoneCom);
		$this->setemailCom($emailCom);
	
	}

	public function setidCom($idCom) {
		$this->idCom = $idCom;
	}
	public function getidCom() {
		return $this->idCom;
	}

	public function setnameCom($nameCom) {
		$this->nameCom = $nameCom;
	}
	public function getnameCom() {
		return $this->nameCom;
	}

	public function setaddressCom($addressCom) {
		$this->addressCom = $addressCom;
	}
	public function getaddressCom() {
		return $this->addressCom;
	}	
	
	public function setphoneCom($phoneCom) {
		$this->phoneCom = $phoneCom;
	}
	public function getphoneCom() {
		return $this->phoneCom;
	}	
	
	public function setemailCom($emailCom) {
		$this->emailCom = $emailCom;
	}
	public function getemailCom() {
		return $this->emailCom;
	}	

}

?>