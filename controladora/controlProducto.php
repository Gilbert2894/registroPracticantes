<?php	
	include ("../data/dtProducto.php");
	include ("../dominio/producto.php");


	include ("../data/dtConexion.php");
	
	class controlProducto {
		
		function controlProducto(){
		}
	
		function insertar(){
			$dtProducto = new dtProducto;
			
			$codigoProducto = $_POST['codigoProducto'];
			$idCategoria = $_POST['idCategoria'];
			$nombreProducto = $_POST['nombreProducto'];
			$descripcionProducto = $_POST['descripcionProducto'];		
			
			$estencion = end ( explode ( ".", $_FILES ['imagen'] ['name'] ) );
			$imagenLink = "../galeria/$codigoProducto.$estencion";

			$producto = new producto( $codigoProducto, $idCategoria, $nombreProducto, $descripcionProducto, $imagenLink, 0);

			if($dtProducto->insertar($producto)==true){	//Isertar primero a la base de datos
					//Luego sube el archivo
				if (move_uploaded_file ( $_FILES ['imagen'] ['tmp_name'], $imagenLink )) {
					echo "</br>".$_FILES ['imagen'] ['tmp_name']."</br>";
					echo "Imagen se guardo";
				}else{
					echo "Imagen no se guardo";
				}	
				echo "Registro grabado correctamente<br>";
			}else{
				echo "</p>Error al guardar ".$codigoProducto." en base de datos</p><br>";
			}		
		}
		
		function modificar(){
			$dtProducto = new dtProducto;
			
			$codigoProducto= $_POST['codigoProducto'];
			$idCategoria= $_POST['idCategoria'];
			$nombreProducto= $_POST['nombreProducto'];
			$descripcionProducto= $_POST['descripcionProducto'];	
			$imagenLink	= $_POST['imagenLink'];		
			
			$estencion = end ( explode ( ".", $_FILES ['imagen'] ['name'] ) );//Obtiene la estencion
			

			if ($estencion) {
				$imagenLink = "../galeria/$codigoProducto.$estencion";
			}//Si seleciona una imagen se actualiza la url de la misma
			//Si no se mantiene la url que se resive por _POST[imagenLink]
			
			$producto = new producto( $codigoProducto, $idCategoria, $nombreProducto, $descripcionProducto, $imagenLink, 0);			

			if($dtProducto->modificar($producto)==true){	

				if (move_uploaded_file ( $_FILES ['imagen'] ['tmp_name'], $imagenLink )) {
					echo "Imagen se guardo";
				}else{
					echo "Imagen no se guardo";
				}	
				echo "Registro grabado correctamente<br>";
			}else{
				echo "</p>Error al guardar ".$codigoProducto." en base de datos</p><br>";
			}

		}
		
		function eliminar(){
			$codigoProducto= $_POST['codigoProducto'];
			
			$dtProducto = new dtProducto;
			
			if($dtProducto->eliminar($codigoProducto)==true){		
				echo "Registro borrado correctamente<br>";
			}else{
				echo "</p>Error al eliminar</p><br>";
			}
		}
	}

	/*function insertarImagen(){
			//$data = new DataConsultas ();
			$nombre = trim($_POST['nombre']);
			$idGaleria = $_POST['id'];
			$result = "";
			//$id = $data->consultar("SELECT COUNT(IMAGENES_GALERIA_ID) FROM tb_imagenes WHERE IMAGENES_GALERIA_ID = $idGaleria")[0][0]+1;

			$estencion = end ( explode ( ".", $_FILES ['imagen'] ['name'] ) );
			//$src = "./galeria/$nombre$id.$estencion";
			$src = "./LUIS.$estencion";
			$upload = false;
			$result = 0;
			if (move_uploaded_file ( $_FILES ['imagen'] ['tmp_name'], $src )) {
				//$query= "INSERT INTO tb_imagenes(IMAGENES_GALERIA_ID, URL) VALUES ($idGaleria, '$src')";
			//	echo "$query";
				//$result = $data->enviar($query);
			}else{
				//$src = 0;
			}
			echo $src;
		}*/
	
	$op = $_POST['op'];
	$control = new controlProducto;
	
	if($op=="insertar"){
	$control->insertar();
	}
	if($op=="eliminar"){
	$control->eliminar();
	}
	if($op=="modificar"){
	$control->modificar();
	}
?>