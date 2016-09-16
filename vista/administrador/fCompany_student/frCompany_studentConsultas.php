<script lang="JavaScript" src="../../js/administrador/jsCompany_student.js" ></script>

<?php
	include ("../../../controladora/controlObtenerCompany_student.php");
	$control = new controlObtenerCompany_student;
	$lista =$control->obtenerCompany_students();
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
			<th>Id</th>		
			<th>Estudiante</th>		
			<th>Empresa</th>
			<th>Encargado</th>	
			<th colspan="2">Opciones</th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay Estudiantes registrada";
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
</div>	
</div>	

		
