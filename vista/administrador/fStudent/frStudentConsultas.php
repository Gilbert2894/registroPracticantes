<script lang="JavaScript" src="../../js/administrador/jsStudent.js" ></script>

<?php
	include ("../../../controladora/controlObtenerStudent.php");
	$control = new controlObtenerStudent;
	$lista =$control->obtenerStudents();
?>
<div class="container">
	<h1>Estudiante</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
		<tr>		
			<th><p>carnet</p></th>		
			<th><p>nombre</p></th>		
			<th><p>apellido</p></th>
			<th><p>cedula</p></th>
			<th><p>carrera</p></th>
			<th><p>Telefono</p></th>
			<th><p>dob</p></th>	
			<th colspan="2"><p>Opciones</p></th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay empresas registrada";
			} else {
				foreach ($lista as $student){
					echo "<tr>";
					echo	"<td>".$student->getcarnet()."</td>";
					echo	"<td>".$student->getnameStu()."</td>";
					echo	"<td>".$student->getlnameStu()."</td>";
					echo	"<td>".$student->getcedula()."</td>";
					echo	"<td>".$student->getcarrera()."</td>";
					echo	"<td>".$student->getphone()."</td>";
					echo	"<td>".$student->getdob()."</td>";
					
					echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"consultarStudent('".$student->getcarnet()."')\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarStudent(".$student->getcarnet().")\" >Eliminar</button></td> ";
					echo "</tr>";
				}
			}	
		?>
	</table>
	</div>		
</div>	

		
