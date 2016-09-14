<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<script lang="JavaScript" src="../../js/administrador/jsCategoria.js" ></script>
<?php
	

	$idCategoria= $_POST['idCategoria'];
	include ("../../../controladora/controlObtenerCategoria.php");
	$control = new controlObtenerCategoria;
	$categoria = $control->obtenerCategoria($idCategoria); 
?>


<div class="container">

        <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

  	<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar Categoría</h1>
	  </div>
	  <div class="panel-body">

      <form class="form-inline" id="frCategoriaModificar" method="POST">
        
		<p> <label for="">Nombre Categoría: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="nombreCategoria" name="nombreCategoria"
			value=<?php echo "\"".$categoria->getnombreCategoria()."\"";?>/> </p>
		
		<p> <label for="">Descripción: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="descripcionCategoria" name="descripcionCategoria"
			value=<?php echo "\"".$categoria->getdescripcionCategoria()."\"";?>/> </p>
<br>
		<input type="hidden" id="idCategoria" name="idCategoria" value=<?php echo "\"".$idCategoria."\"";?> />
		<input type="submit" value="Modificar" class="submit btn btn-success"/>

	</form>
     </div>
	</div>
  	

  </div>
  <div class="col-md-4"></div>
</div>
</div>





