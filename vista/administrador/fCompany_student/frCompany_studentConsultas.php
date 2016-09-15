<script lang="JavaScript" src="../../js/administrador/jsCompany_student.js" ></script>

<?php
	include ("../../../controladora/controlObtenerCompany_student.php");
	$control = new controlObtenerCompany_student;
	$lista =$control->obtenerCompany_students();
?>
<div class="container">
	<h1>Información de Estudiantes Empresa</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
		<tr>		
			<th><p>id</p></th>		
			<th><p>carnet</p></th>		
			<th><p>id empresa</p></th>
			<th><p>id usuario</p></th>	
			<th colspan="2"><p>Opciones</p></th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay Empresa estudiantes registrada";
			} else {
				foreach ($lista as $company_student){
					echo "<tr>";
					echo	"<td>".$company_student->getid()."</td>";
					echo	"<td>".$company_student->getcarnet()."</td>";
					echo	"<td>".$company_student->getidCom()."</td>";
					echo	"<td>".$company_student->getid_user()."</td>";
					
					echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"consultarCompany_student('".$company_student->getid()."')\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarCompany_student(".$company_student->getid().")\" >Eliminar</button></td> ";
					echo "</tr>";
				}
			}	
		?>
	</table>
	</div>		
</div>	

		
