<script lang="JavaScript" src="../../js/administrador/jsCompany.js" ></script>

<?php
	include ("../../../controladora/controlObtenerCompany.php");
	$control = new controlObtenerCompany;
	$lista =$control->obtenerCompanys();
?>
<div class="container">
	<h1>Información de Empresas</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
		<tr>		
			<th><p>código</p></th>		
			<th><p>nombre</p></th>		
			<th><p>dirección</p></th>
			<th><p>telefono</p></th>
			<th><p>email</p></th>		
			<th colspan="2"><p>Opciones</p></th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay empresas registrada";
			} else {
				foreach ($lista as $company){
					echo "<tr>";
					echo	"<td>".$company->getidCom()."</td>";
					echo	"<td>".$company->getnameCom()."</td>";
					echo	"<td>".$company->getaddressCom()."</td>";
					echo	"<td>".$company->getphoneCom()."</td>";
					echo	"<td>".$company->getemailCom()."</td>";
					
					echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"consultarCompany('".$company->getidCom()."')\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarCompany(".$company->getidCom().")\" >Eliminar</button></td> ";
					echo "</tr>";
				}
			}	
		?>
	</table>
	</div>		
</div>	

		
