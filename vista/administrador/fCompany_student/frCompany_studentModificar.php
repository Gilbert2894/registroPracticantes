<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<script lang="JavaScript" src="../../js/administrador/jsCompany_student.js" ></script>
<?php
	

	$id= $_POST['id'];
	include ("../../../controladora/controlObtenerCompany_student.php");
	$control = new controlObtenerCompany_student;
	$company_student = $control->obtenerCompany_student($id); 
?>


<div class="container">

        <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

  	<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar Empresa estudiantes</h1>
	  </div>
	  <div class="panel-body">

      <form class="form-inline" id="frCompany_studentModificar" method="POST">
        
		<p> <label for="">Carnet : </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="carnet" name="carnet"
			value=<?php echo "\"".$company_student->getcarnet()."\"";?>/> </p>
		
		<p> <label for="">id empresa: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="idCom" name="idCom"
			value=<?php echo "\"".$company_student->getidCom()."\"";?>/> </p>

		<p> <label for="">id usuario: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="id_user" name="id_user"
			value=<?php echo "\"".$company_student->getid_user()."\"";?>/> </p>
<br>
		<input type="hidden" id="id" name="id" value=<?php echo "\"".$id."\"";?> />
		<input type="submit" value="Modificar" class="submit btn btn-success"/>

	</form>
     </div>
	</div>
  	

  </div>
  <div class="col-md-4"></div>
</div>
</div>





