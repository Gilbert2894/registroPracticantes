<?php
class dtConexion{
  var $conect;

     function dtConexion(){
	 }

	 function getCon(){
	 return $this->conect;
	 }

	 function conectar() {

	     if(!($con=@mysql_connect("localhost","root","")))
		 {
		     echo"Error al conectar a la base de datos";
			 exit();
	     }
		  if (!@mysql_select_db("empresaspractica",$con)) {
		   echo "Error al seleccionar la base de datos";
		   exit();
		  }
          mysql_query("SET NAMES 'utf8'");
	       $this->conect=$con;
		   return true;
	 }
}

?>
