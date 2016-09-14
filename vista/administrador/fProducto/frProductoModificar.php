<?php
	include ("../../../controladora/controlObtenerProducto.php");
	$control = new controlObtenerProducto;
	$codigoProducto = $_POST['codigoProducto'];
	$listaCategoria = $control->obtenerCategorias();
	$producto = $control->obtenerProductoModificar($codigoProducto);

	$idCategoria = $producto->getidCategoria();
	$nombreProducto = $producto->getnombreProducto();
	$descripcionProducto = $producto->getdescripcionProducto();
	$imagenLink = $producto->getimagenLink();

?>
<script lang="JavaScript" src="../../js/administrador/jsProducto.js" ></script>	
<link rel="stylesheet" type="text/css" media="all" href="../../css/administrador/cssProducto.css">


<div class="container">



			<div class="panel panel-default panel panel-mio">
		  <div class="panel-heading ">
		    <h1 class="panel-title">Modificar Producto</h1>
		  </div>
		  <div class="panel-body">
	<form id="frProductoModificar" method="POST" class="form-horizontal">
<div class="row">

	<div class="col-md-4">

		<p> <label for="">Codigo Producto: <?php echo $codigoProducto?></label></p>
	<input type="hidden"class="form-control"  id="codigoProducto" name="codigoProducto" value="<?php echo $codigoProducto?>" />
	<input type="hidden" id="imagenLink" name="imagenLink" value="<?php echo $imagenLink?>" />
	
	<p> <label for="">Nombre Producto: </label>
	<input type="text" class="form-control" id="nombreProducto" name="nombreProducto" value="<?php echo $nombreProducto?>"/></p>
	
	<p> <label for="">Descripcion: </label>
	<input type="text" class="form-control"id="descripcionProducto" name="descripcionProducto" value="<?php echo $descripcionProducto?>"/></p>
	

	<?php
		if(!$listaCategoria){                               
            echo "<br>
                <p><label>No hay registro de Categoria</label></a>";
        }else{
            echo "<p><label>Seleccione Categoria</label></a>
            	<p><label><select id=\"idCategoria\" name=\"idCategoria\"></label></a>";
            foreach ($listaCategoria as $categoria){ 
            	if ($categoria->getidCategoria() == $idCategoria) {
            		echo " <p><label><option selected value=\"".$categoria->getidCategoria()."\">".$categoria->getNombreCategoria()."</option></label></a>";
            	} else {
            		echo " <p><label><option value=\"".$categoria->getidCategoria()."\">".$categoria->getNombreCategoria()."</option></label></a>";
            	}                
            }
            echo "<p><label><select/></label></a>"; 
        } 
    ?>   
      <p><label for="imagen" >Añadir Imagen:</label>
             <label> <input type="file" name="imagen" id="imagen" accept="image/*"/></label></p>	
    </br>
	<input type="submit" value="Guardar" class="submit btn btn-success"/>
		
	</div><!--class="col-md-3" -->

    <div class="col-md-2"></div>
	<div class="col-md-6">
		 <img id="img_destinoModificar"  class='img_destinoModificar' src="<?php echo "../".$imagenLink ?>">
		
	</div><!--class="col-md-3" -->


	</div>		
		


	
</form>
</div><!--class="panel-body" -->
</div><!--class="panel panel-default panel panel-mio" -->

</div>