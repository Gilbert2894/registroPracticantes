	<script lang="JavaScript" src="../../js/administrador/jsInformacionEmpresa.js" ></script>

<div class="container">

	<form id="frInformacionEmpresaModificar" method="POST">
	
	<div class="row"> 
		
<?php
	include ("../../../controladora/controlObtenerInformacionEmpresa.php");
	$control = new controlObtenerInformacionEmpresa;
	$lista =$control->obtenerInformacionEmpresas();
	$con = 0;

	foreach ($lista as $informacionempresa){ 
		$con ++;
		if($con <= 2){?>
			<div class="col-md-6">
				<div class="panel panel-default">
			  <div class="panel-heading ">
			    <h1 class="panel-title"><?php echo $informacionempresa->gettitulo();?> </h1>
			  </div>
			  <div class="panel-body">
				
				<p>Ingrese : </p>
				<input class="form-control" type="text" 
					id="<?php echo $informacionempresa->getidInformacionEmpresa();?>" 
					name="<?php echo $informacionempresa->getidInformacionEmpresa();?>"
					value="<?php echo $informacionempresa->getdescripcionEmpresa();?>" />			
			</div>	
			</div>	
			</div><!--class="panel panel-default panel panel-mio" -->
		<?php }else{ ?>

			<div class="col-md-6">
				<div class="panel panel-default">
			  <div class="panel-heading ">
			    <h1 class="panel-title"><?php echo $informacionempresa->gettitulo();?></h1>
			  </div>
			  <div class="panel-body">
				
				<p>Ingrese : </p>
				<textarea class="form-control" rows="3" 
					id="<?php echo $informacionempresa->getidInformacionEmpresa();?>" 
					name="<?php echo $informacionempresa->getidInformacionEmpresa();?>"
					><?php echo $informacionempresa->getdescripcionEmpresa();?></textarea>			
			</div>
			</div>	
			</div><!--class="panel panel-default panel panel-mio" -->
		<?php }

		 }?>	

<br>
	
</div>
<input type="submit" value="Modificar" class="submit btn btn-success"/>	

</form>
<br>
<br>
<br>

</div>				
				
				
	
				