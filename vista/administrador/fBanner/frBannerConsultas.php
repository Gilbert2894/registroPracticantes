<script lang="JavaScript" src="../../js/administrador/jsBanner.js" ></script>
 <link rel="stylesheet" type="text/css" media="all" href="../../css/administrador/cssBanner.css">
<?php
	include ("../../../controladora/controlObtenerBanner.php");
	$control = new controlObtenerBanner;
	$lista =$control->obtenerBanners();
	if(!$lista){
		echo "NO SE ENCONTRO ";
	}else{
?>

<div class="container">
	<h1>Información de Banner</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
	<tr>
		<th><p>idBanner</p></th>
		
		<th><p>Descripción Banner</p></th>
		<th><p>Imagen</p></th>

		<th colspan="1"><p>Opciones</p></th>
	</tr>
	<?php 
		foreach ($lista as $Banner){
			echo "<tr>";
			echo	"<td>".$Banner->getidBanner()."</td>";
			echo	"<td>".$Banner->getdescripcionBanner()."</td>";
			echo	"<td><img class='imgMini' src='../".$Banner->getimagenBanner()."'></td>";
			$id = $Banner->getidBanner();
						
			echo	"<td><button 
					
					type='button' 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					onclick=\"modificarBannerForm($id)\" > Modificar</button></td> ";
					echo "</tr>";

			echo "</tr>";
		}
	}
	?>
</table>
	</div>		
</div>					