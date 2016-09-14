<?php
	include ("../../../controladora/controlObtenerBanner.php");
	$control = new controlObtenerBanner;
	$idBanner = $_POST['idBanner'];
	$Banner = $control->obtenerBanner($idBanner);

	$idBanner = $Banner->getidBanner();
	$descripcionBanner = $Banner->getdescripcionBanner();
	$imagenBanner = $Banner->getimagenBanner();

?>
<script lang="JavaScript" src="../../js/administrador/jsBanner.js" ></script>	
<link rel="stylesheet" type="text/css" media="all" href="../../css/administrador/cssBanner.css">


<div class="container">

<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar Banner</h1>
	  </div>
	  <div class="panel-body">
<form id="frBannerModificar" method="POST" class="form-horizontal">	

<div class="row">

	<div class="col-md-4">

		<input type="hidden" id="idBanner" name="idBanner" value="<?php echo $idBanner?>" />
	<input type="hidden" id="imagenBanner" name="imagenBanner" value="<?php echo $imagenBanner?>" />

	<p> <label for="">Descripción: </label>
	<input type="text" class="form-control" id="descripcionBanner" name="descripcionBanner" value="<?php echo $descripcionBanner?>"/></p>
	
  
     <p><label for="imagen" >Añadir Imagen:</label>
        <label> <input type="file" name="imagen" id="imagen" accept="image/*"/></label></p>
       
	
	</br>
	<input type="submit" value="Guardar" class="submit btn btn-success"/>
		
	</div><!--class="col-md-3" -->
    
    <div class="col-md-2"></div>

	<div class="col-md-6">
		  <img id="img_destinoModificar"  class='img_destinoModificar' src="<?php echo "../".$imagenBanner ?>">
		
	</div><!--class="col-md-3" -->


	</div>		


	
</form>
</div><!--class="panel-body" -->
</div><!--class="panel panel-default panel panel-mio" -->

</div>