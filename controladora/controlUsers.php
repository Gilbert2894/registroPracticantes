<?php	
	include ("../data/dtusers.php");
	include ("../data/dtConexion.php");
	include ("../dominio/users.php");
	
	
	class controlUsers {
		
		function controlUsers(){
		}
	
		function insertar(){
		
			$username= $_POST['username'];
			$password= $_POST['password'];
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];
			$phone= $_POST['phone'];
			$cellphone= $_POST['n_cel'];
			$email= $_POST['email'];
			$encriptada =sha1($password);
			
			$users = new users(0,$username, $encriptada, $fname, $lname, $phone, $cellphone, $email);			
						
			$dtusers = new dtusers;
			
			if($dtusers->insertar($users)==true){	
				echo "true";	
			}else{
				echo "false";
			}
		}
		
		function modificar(){
					
			$id= $_POST['id'];
			$username= $_POST['username'];
			$password= $_POST['password'];
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];
			$phone= $_POST['phone'];
			$cellphone= $_POST['cellphone'];
			$email= $_POST['email'];
			$encriptada =sha1($password);
			
			$users = new users($id, $username, $encriptada, $fname, $lname, $phone, $cellphone, $email);
			
			
			
			$dtusers = new dtusers;
			
			if($dtusers->modificar($users)==true){		
				echo "true";	
			}else{
				echo "false";
			}
		}
		
		function eliminar(){
			
			$id= $_POST['id'];
			$dtusers = new dtusers;
			
			if($dtusers->eliminar($id)==true){		
				echo "true";	
			}else{
				echo "false";
			}
		}
	}
	
	$op = $_POST['accion'];
	$control = new controlUsers;
	
	if($op=="insertar"){
	$control->insertar();
	}
	if($op=="eliminar"){
	$control->eliminar();
	}
	if($op=="modificar"){
	$control->modificar();
	}
?>