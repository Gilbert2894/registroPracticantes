<script lang="JavaScript" src="../../js/administrador/jsStudent.js" ></script>

<?php
	include ("../../../controladora/controlObtenerStudent.php");
	$control = new controlObtenerStudent;
	$lista =$control->obtenerStudents();
?>
<div class="row">
    <div class="col-md-12">
    	<div class="portlet light bordered">
    		<div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> Estudiantes</span>
                </div>
            </div>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-hover table-checkable order-column">
		<tr>		
			<th>Carnet</th>		
			<th>Nombre</th>		
			<th>Apellido</th>
			<th>Cedula</th>
			<th>Carrera</th>
			<th>Telefono</th>
			<th>Fecha Nacimiento</th>	
			<th colspan="2">Opciones</th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay estudiantes registrada";
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
</div>	
</div>	
		
