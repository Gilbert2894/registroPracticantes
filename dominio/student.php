<?php
class student{
	private	$carnet;
	private	$nameStu;
	private	$lnameStu;
	private $cedula;
	private $carrera;
	private $phone;
	private $dob;


	function student( $carnet, $nameStu, $lnameStu, $cedula, $carrera, $phone, $dob){
		$this->setcarnet($carnet);
		$this->setnameStu($nameStu);
		$this->setlnameStu($lnameStu);
		$this->setcedula($cedula);
		$this->setcarrera($carrera);
		$this->setphone($phone);
		$this->setdob($dob);
	
	}

	public function setcarnet($carnet) {
		$this->carnet = $carnet;
	}
	public function getcarnet() {
		return $this->carnet;
	}

	public function setnameStu($nameStu) {
		$this->nameStu = $nameStu;
	}
	public function getnameStu() {
		return $this->nameStu;
	}

	public function setlnameStu($lnameStu) {
		$this->lnameStu = $lnameStu;
	}
	public function getlnameStu() {
		return $this->lnameStu;
	}	
	
	public function setcedula($cedula) {
		$this->cedula = $cedula;
	}
	public function getcedula() {
		return $this->cedula;
	}	
	
	public function setcarrera($carrera) {
		$this->carrera = $carrera;
	}
	public function getcarrera() {
		return $this->carrera;
	}

    public function setphone($phone) {
		$this->phone = $phone;
	}
	public function getphone() {
		return $this->phone;
	}

    public function setdob($dob) {
		$this->dob = $dob;
	}
	public function getdob() {
		return $this->dob;
	}	

}

?>