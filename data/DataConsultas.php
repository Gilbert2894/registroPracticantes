<?php
include ("./DBConexion.php");
class DataConsultas {
	
	function DataConsultas() {
	}
	
	function enviar($query) {
	$con = new DBConexion ();
		if ($con->conectar () == true) {
			$result = @mysql_query ( $query );
			$id = @mysql_insert_id ();
			if (! $result) {
				return false;
			} else {		
				return $id;
			}
		}
	}
	
	function consultar($query) {
	//	echo "DataConsultas consultar".$query;
		$con = new DBConexion ();
		//array Final
		$lista = array ();
		if ($con->conectar () == true) {
			$result = @mysql_query ( $query );
			$i = 0;
			while ( $row = mysql_fetch_array ( $result ) ) {
				// $row['nombreColumna'] = $row[0]
				$cont = (count ( $row )) / 2;
				$listaTemp = array ();
				for($i = 0; $i < $cont; $i ++) {
					array_push ( $listaTemp, $row [$i] );
				}
				array_push ( $lista, $listaTemp );
			}
		}
		if (! $lista) {
			return false;
		} else {
			return $lista;
		}
	}
}
?>