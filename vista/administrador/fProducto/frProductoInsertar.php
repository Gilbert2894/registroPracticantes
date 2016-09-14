<?php
	include ("../../../controladora/controlObtenerProducto.php");
	$control = new controlObtenerProducto;
	$listaCategoria = $control->obtenerCategorias();
?>
<script lang="JavaScript" src="../../js/administrador/jsProducto.js" ></script>	
<link rel="stylesheet" type="text/css" media="all" href="../../css/administrador/cssProducto.css">

	
<div class="container">



				<div class="panel panel-default panel panel-mio">
			  <div class="panel-heading ">
			    <h1 class="panel-title">Ingresar Producto</h1>
			  </div>
			  <div class="panel-body">

			  	<form id="frProductoInsertar" method="POST" class="form-horizontal">
<div class="row">

	<div class="col-md-4">
		<p> <label for="">Código Producto: </label>
				 	
				<input type="text"  class="form-control" id="codigoProducto" name="codigoProducto" placeholder="AR-001" />	</p>
		        
				<p> <label for="">Nombre Producto: </label>
					
				<input type="text"   class="form-control" id="nombreProducto" name="nombreProducto" placeholder="" />	</p>
				
				
				<p> <label for="">Descripción: </label>
				<input type="text"   class="form-control" id="descripcionProducto" name="descripcionProducto" placeholder=""/></p>
				

				<?php
					if(!$listaCategoria){                               
			            echo "<br>
			                <p><label>No hay registro de Categoría</label></a>";
			        }else{
			            echo "<p><label>Seleccione Categoría</label></a>
			            	<p><label><select id=\"idCategoria\" name=\"idCategoria\"></label></a>";
			            foreach ($listaCategoria as $categoria){ 
			                echo " <p><label><option value=\"".$categoria->getidCategoria()."\">".$categoria->getNombreCategoria()."</option></label></a>";
			            }
			            echo "<p><label><select/></label></a>"; 
			        } 
			    ?>   
			      <p><label for="imagen" >Añadir Imagen:</label>
			             <label> <input type="file" name="imagen" id="imagen" accept="image/*"/></label></p>
			              	
				</br>
				<input type="submit" value="Guardar" class="submit btn btn-success"/>

		
	</div><!--class="col-md-3" -->
	<div class="col-md-8">
		
		<img class="img-responsive img-thumbnail animacion" alt="Responsive image" id="vistaPrevia" src="#">
	</div><!--class="col-md-3" -->

	</div>

				
		


	
</form>
</div><!--class="panel-body" -->
</div><!--class="panel panel-default panel panel-mio" -->

</div>
