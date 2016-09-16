<script lang="JavaScript" src="../../js/administrador/jsCompany.js" ></script>

<?php
	include ("../../../controladora/controlObtenerCompany.php");
	$control = new controlObtenerCompany;
	$lista =$control->obtenerCompanys();
?>
<div class="row">
    <div class="col-md-12">
    	<div class="portlet light bordered">
    		<div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Empresas</span>
                </div>
            </div>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-checkable order-column">
		<tr>		
			<th>Código</th>		
			<th>Nombre</th>		
			<th>Dirección</th>
			<th>Telefono</th>
			<th>Email</th>		
			<th colspan="2">Opciones</th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay empresas registradas";
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
</div>	
</div>	

		
