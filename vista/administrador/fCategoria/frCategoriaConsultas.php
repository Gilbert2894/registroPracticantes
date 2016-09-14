<script lang="JavaScript" src="../../js/administrador/jsCategoria.js" ></script>

<?php
	include ("../../../controladora/controlObtenerCategoria.php");
	$control = new controlObtenerCategoria;
	$lista =$control->obtenerCategorias();
?>
<div class="container">
	<h1>Información de categoría</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
		<tr>		
			<th><p>código</p></th>		
			<th><p>nombre</p></th>		
			<th><p>descripción</p></th>		
			<th colspan="2"><p>Opciones</p></th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay categoria registrada";
			} else {
				foreach ($lista as $categoria){
					echo "<tr>";
					echo	"<td>".$categoria->getidCategoria()."</td>";
					echo	"<td>".$categoria->getnombreCategoria()."</td>";
					echo	"<td>".$categoria->getdescripcionCategoria()."</td>";
					
					echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"consultarCategoria('".$categoria->getidCategoria()."')\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarCategoria(".$categoria->getidCategoria().")\" >Eliminar</button></td> ";
					echo "</tr>";
				}
			}	
		?>
	</table>
	</div>		
</div>	

		
