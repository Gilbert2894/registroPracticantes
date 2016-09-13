<?php
class users{
	private	$id;
	private	$username;
	private	$password;
	private $fname;
	private $lname;
	private $phone;
	private $cellphone;
	private $email;


	function users( $id, $username, $password, $fname, $lname, $phone, $cellphone, $email){
		$this->setid($id);
		$this->setusername($username);
		$this->setpassword($password);
		$this->setfname($fname);
		$this->setlname($lname);
		$this->setphone($phone);
		$this->setcellphone($cellphone);
		$this->setemail($email);
	
	}

	public function setid($id) {
		$this->id = $id;
	}
	public function getid() {
		return $this->id;
	}

	public function setusername($username) {
		$this->username = $username;
	}
	public function getusername() {
		return $this->username;
	}

	public function setpassword($password) {
		$this->password = $password;
	}
	public function getpassword() {
		return $this->password;
	}	
	
	public function setfname($fname) {
		$this->fname = $fname;
	}
	public function getfname() {
		return $this->fname;
	}	
	
	public function setlname($lname) {
		$this->lname = $lname;
	}
	public function getlname() {
		return $this->lname;
	}

    public function setphone($phone) {
		$this->phone = $phone;
	}
	public function getphone() {
		return $this->phone;
	}

    public function setcellphone($cellphone) {
		$this->cellphone = $cellphone;
	}
	public function getcellphone() {
		return $this->cellphone;
	}

    public function setemail($email) {
		$this->email = $email;
	}
	public function getemail() {
		return $this->email;
	}	

}

?>