<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<script lang="JavaScript" src="../../js/administrador/jsCompany.js" ></script>
<?php
	

	$idCom= $_POST['idCom'];
	include ("../../../controladora/controlObtenerCompany.php");
	$control = new controlObtenerCompany;
	$company = $control->obtenerCompany($idCom); 
?>


<div class="container">

        <div class="row">
  <div class="col-md-4">

  	<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar Company</h1>
	  </div>
	  <div class="panel-body">

      <form class="form-inline" id="frCompanyModificar" method="POST">
        
		<p> <label for="">Nombre: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="nameCom" name="nameCom"
			value=<?php echo "\"".$company->getnameCom()."\"";?>/> </p>
		
		<p> <label for="">Dirección: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="addressCom" name="addressCom"
			value=<?php echo "\"".$company->getaddressCom()."\"";?>/> </p>

		<p> <label for="">Telefono: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="phoneCom" name="phoneCom"
			value=<?php echo "\"".$company->getphoneCom()."\"";?>/> </p>

		<p> <label for="">Email: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="emailCom" name="emailCom"
			value=<?php echo "\"".$company->getemailCom()."\"";?>/> </p>
<br>
		<input type="hidden" id="idCom" name="idCom" value=<?php echo "\"".$idCom."\"";?> />
		<input type="submit" value="Modificar" class="submit btn btn-success"/>

	</form>
     </div>
	</div>
  	

  </div>
  <div class="col-md-4"></div>
</div>
</div>





