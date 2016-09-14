<script lang="JavaScript" src="../../js/administrador/jsProducto.js" ></script>
 <link rel="stylesheet" type="text/css" media="all" href="../../css/administrador/cssProducto.css">
<?php
	include ("../../../controladora/controlObtenerProducto.php");
	$control = new controlObtenerProducto;
	$buscar = $_POST['buscar'];
	$lista =$control->obtenerProducto($buscar);
	if(!$lista){
		echo "NO SE ENCONTRO ";
	}else{
?>
<div class="container">
	<h1>Información de Banner</h1>
<div class="table-responsive ">
	<table class="table table-bordered table table-hover ">
	<tr>
		<th><p>nombre</p></th>
		
		<th><p>codigo</p></th>
		
		<th><p>descripcion</p></th>
		
		<th><p>Categoria</p></th>

		<th><p>Imagen</p></th>

		<th colspan="2"><p>Opciones</p></th>
	</tr>
	<?php 
		foreach ($lista as $producto){
			echo "<tr>";
			echo	"<td>".$producto->getnombreProducto()."</td>";
			echo	"<td>".$producto->getcodigoProducto()."</td>";
			echo	"<td>".$producto->getdescripcionProducto()."</td>";
			echo	"<td>".$producto->getidCategoria()."</td>";
			echo	"<td><img class='imgMini' src='../".$producto->getimagenLink()."'></td>";
			$id = $producto->getcodigoProducto();
			
           echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"modificarProductoForm($id)\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarProducto($id)\" >Eliminar</button></td> ";

			echo "</tr>";
		}
	}
	?>
</table>	
	</div>		
</div>			