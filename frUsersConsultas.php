<script lang="JavaScript" src="../../js/administrador/jsUsers.js" ></script>

<?php
	include ("../../../controladora/controlObtenerUsers.php");
	$control = new controlObtenerUsers;
	$lista =$control->obtenerUserss();
?>
<div class="container">
	<h1>Información de Usuario</h1>
<div class="table-responsive">
	<table class="table table-bordered table table-hover">
		<tr>		
			<th><p>id</p></th>		
			<th><p>usuario</p></th>		
			<th><p>contraseña</p></th>
			<th><p>nombre</p></th>
			<th><p>apellido</p></th>
			<th><p>telefono</p></th>
			<th><p>celular</p></th>
			<th><p>email</p></th>		
			<th colspan="2"><p>Opciones</p></th>
		</tr>
		<?php 
			if (!$lista) {
				echo "No hay usuarios registrados";
			} else {
				foreach ($lista as $users){
					echo "<tr>";
					echo	"<td>".$users->getid()."</td>";
					echo	"<td>".$users->getusername()."</td>";
					echo	"<td>".$users->getpassword()."</td>";
					echo	"<td>".$users->getfname()."</td>";
					echo	"<td>".$users->getlname()."</td>";
					echo	"<td>".$users->getphone()."</td>";
					echo	"<td>".$users->getcellphone()."</td>";
					echo	"<td>".$users->getemail()."</td>";
					
					echo	"<td><button 
					class=\"btn btn-primary btn-sm  glyphicon glyphicon-pencil\" 
					type='button' 
					onclick=\"consultarUsers('".$users->getid()."')\"> Modificar </button></td>";

					echo	"<td><button 
					
					type='button' 
					class=\"btn btn-danger btn-sm  glyphicon glyphicon-trash\" 
					onclick=\"eliminarUsers(".$users->getid().")\" >Eliminar</button></td> ";
					echo "</tr>";
				}
			}	
		?>
	</table>
	</div>		
</div>	

		
