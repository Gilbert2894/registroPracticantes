<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<script lang="JavaScript" src="../../js/administrador/jsStudent.js" ></script>
<?php
	

	$carnet= $_POST['carnet'];
	include ("../../../controladora/controlObtenerStudent.php");
	$control = new controlObtenerStudent;
	$student = $control->obtenerStudent($carnet); 
?>


<div class="container">

        <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

  	<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar Estudiante</h1>
	  </div>
	  <div class="panel-body">

      <form class="form-inline" id="frStudentModificar" method="POST">
        
		<p> <label for="">Nombre Estudiante: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="nameStu" name="nameStu"
			value=<?php echo "\"".$student->getnameStu()."\"";?>/> </p>
		
		<p> <label for="">Apellido Estudiante: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="lnameStu" name="lnameStu"
			value=<?php echo "\"".$student->getlnameStu()."\"";?>/> </p>

		<p> <label for="">cedula: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="cedula" name="cedula"
			value=<?php echo "\"".$student->getcedula()."\"";?>/> </p>

		<p> <label for="">carrera: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="carrera" name="carrera"
			value=<?php echo "\"".$student->getcarrera()."\"";?>/> </p>

		<p> <label for="">Telefono: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="phone" name="phone"
			value=<?php echo "\"".$student->getphone()."\"";?>/> </p>

		<p> <label for="">dob: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="dob" name="dob"
			value=<?php echo "\"".$student->getdob()."\"";?>/> </p>
<br>
		<input type="hidden" id="carnet" name="carnet" value=<?php echo "\"".$carnet."\"";?> />
		<input type="submit" value="Modificar" class="submit btn btn-success"/>

	</form>
     </div>
	</div>
  	

  </div>
  <div class="col-md-4"></div>
</div>
</div>





