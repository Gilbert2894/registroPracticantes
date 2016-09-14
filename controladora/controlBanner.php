<?php	
	include ("../data/dtBanner.php");
	include ("../dominio/banner.php");


	include ("../data/dtConexion.php");
	
	class controlBanner {
		
		function controlBanner(){
		}

		function insertar(){
			$dtBanner = new dtBanner;
			
			$descripcionBanner = $_POST['descripcionBanner'];		
			
			$id = $dtBanner->consultaID();//Obtengo el ultimo id
			$id+=1;
			$estencion = end ( explode ( ".", $_FILES ['imagen'] ['name'] ) );
			$imagenBanner = "../banner/banner-$id.$estencion";

			$banner = new banner($id , $imagenBanner, $descripcionBanner);

			if($dtBanner->insertar($banner)==true){	

				if (move_uploaded_file ( $_FILES ['imagen'] ['tmp_name'], $imagenBanner )) {
					echo "Imagen se guardo";
				}else{
					echo "Imagen no se guardo";
				}	
				echo "Registro grabado correctamente<br>";
			}else{
				echo "</p>Error al guardar en base de datos</p><br>";
			}		
		}
		

		function modificar(){
			$dtBanner = new dtBanner;
			
			$id= $_POST['idBanner'];
			$descripcionBanner= $_POST['descripcionBanner'];	
			$imagenBanner	= $_POST['imagenBanner'];		
			
			$estencion = end ( explode ( ".", $_FILES ['imagen'] ['name'] ) );//Obtiene la estencion
			

			if ($estencion) {
				$imagenBanner = "../banner/banner-$id.$estencion";
			}//Si seleciona una imagen se actualiza la url de la misma
			//Si no se mantiene la url que se resive por _POST[imagenBanner]
			
			$banner = new banner($id ,  $imagenBanner, $descripcionBanner);		

			if($dtBanner->modificar($banner)==true){	

				if (move_uploaded_file ( $_FILES ['imagen'] ['tmp_name'], $imagenBanner )) {
					echo "Imagen se guardo";
				}else{
					echo "Imagen no se guardo";
				}	
				echo "Registro grabado correctamente<br>";
			}else{
				echo "</p>Error al guardar en base de datos</p><br>";
			}

		}
	}

	
	$op = $_POST['op'];
	$control = new controlBanner;
	
	if($op=="insertar"){
	$control->insertar();
	}
	if($op=="modificar"){
	$control->modificar();
	}
?>