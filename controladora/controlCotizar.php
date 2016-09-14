<?php

	class controlCotizar {
		
		function controlCotizar(){
		}
		
		function cotizar(){	
			//$control_ = new controlCotizar;
			session_start();
			$codigoProducto = $_POST['codigoProducto'];
			//echo "Codigo = $codigoProducto </br>";
			if( ! isset ($_SESSION['codigoProducto']) ){
				$lista = array();
				$_SESSION['codigoProducto'] = $lista;	
			}
			//if( $control_->esta($_SESSION['codigoProducto'], $codigoProducto) ){
				array_push($_SESSION['codigoProducto'], $codigoProducto);
				//echo "se agrego </br>";
			//}else{
			//	echo "no se agrego";
			//}
				
					
			$max = sizeof($_SESSION['codigoProducto']);			
			echo " Cotizar [ ".$max." ]";
		}

		function eliminar(){	
			$control_ = new controlCotizar;
			session_start();
			$codigoProducto = $_POST['codigoProducto'];
			//echo "Codigo = $codigoProducto </br>";
			
			foreach ($_SESSION['codigoProducto'] as $i => $valor) {
				if($valor == $codigoProducto){
					unset($_SESSION['codigoProducto'][$i]);
				}			    
			}
			//echo "se elimino"."</br>";
			
					
			$max = sizeof($_SESSION['codigoProducto']);			
			echo " Cotizar [ ".$max." ]";
		}

		function cotizarTemp(){	
			session_start();
			if( ! isset ($_SESSION['codigoProducto']) ){
				$lista = array();
				$_SESSION['codigoProducto'] = $lista;	
			}	
			$max = sizeof($_SESSION['codigoProducto']);			
			echo " Cotizar [ ".$max." ]";
		}

		/*function esta($lista, $codigo){
			$boolean = true;
			foreach ($lista as $valor){
				if($valor == $codigo){
					$boolean = false;
				}				
			}
			return $boolean;
		}*/
	}
	
	$accion = $_POST['accion'];
	$control = new controlCotizar;
	if($accion=="cotizar"){
		$control->cotizar();
	}
	if($accion=="eliminar"){
		$control->eliminar();
	}
	if($accion=="cotizarTemp"){
		$control->cotizarTemp();
	}
	


?>