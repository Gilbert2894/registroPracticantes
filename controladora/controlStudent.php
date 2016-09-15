<?php	
	include ("../data/dtstudent.php");
	include ("../data/dtConexion.php");
	include ("../dominio/student.php");
	
	
	class controlStudent {
		
		function controlStudent(){
		}
	
		function insertar(){					
			
			$carnet= $_POST['carnet'];
			$nameStu= $_POST['nameStu'];
			$lnameStu= $_POST['lnameStu'];
			$cedula= $_POST['cedula'];
			$carrera= $_POST['carrera'];
			$phone= $_POST['phone'];
			$dob= $_POST['dob'];
			
			$student = new student($carnet, $nameStu, $lnameStu, $cedula, $carrera, $phone, $dob);	
			
			
			$dtstudent = new dtstudent;
			
			if($dtstudent->insertar($student)==true){	
				echo "<div class='alert alert-success' role='alert'>Registro grabado correctamente</div>";	
			}else{
				echo "</p>Error al guardar ".$carnet."</p><br>";
			}
		}
		
		function modificar(){
					
			$carnet= $_POST['carnet'];
			$nameStu= $_POST['nameStu'];
			$lnameStu= $_POST['lnameStu'];
			$cedula= $_POST['cedula'];
			$carrera= $_POST['carrera'];
			$phone= $_POST['phone'];
			$dob= $_POST['dob'];			
			$student = new student($carnet, $nameStu, $lnameStu, $cedula, $carrera, $phone, $dob);		
			
			$dtstudent = new dtstudent;
			
			if($dtstudent->modificar($student)==true){		
				echo "Registro modificado correctamente<br>";
			}else{
				echo "</p>Error al modificar</p><br>";
			}
		}
		
		function eliminar(){
			
			$carnet= $_POST['carnet'];
			$dtstudent = new dtstudent;
			
			if($dtstudent->eliminar($carnet)==true){		
				echo "<div class='alert alert-success' role='alert'>Registro elimado correctamente</div>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
	}
	
	$op = $_POST['accion'];
	$control = new controlStudent;
	
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