<?php
header('Content-Type: text/html; charset=ISO-8859-1');
?>

<script lang="JavaScript" src="../../js/administrador/jsUsers.js" ></script>
<?php
	

	$id= $_POST['id'];
	include ("../../../controladora/controlObtenerUsers.php");
	$control = new controlObtenerUsers;
	$users = $control->obtenerUsers($id); 
?>


<div class="container">

        <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">

  	<div class="panel panel-default panel panel-mio">
	  <div class="panel-heading ">
	    <h1 class="panel-title">Modificar users</h1>
	  </div>
	  <div class="panel-body">

      <form class="form-inline" id="frUsersModificar" method="POST">
        
		<p> <label for="">Nombre users: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="username" name="username"
			value=<?php echo "\"".$users->getusername()."\"";?>/> </p>
		
		<p> <label for="">contraseña: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="password" name="password"
			value=<?php echo "\"".$users->getpassword()."\"";?>/> </p>

		<p> <label for="">fname: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="fname" name="fname"
			value=<?php echo "\"".$users->getfnameCom()."\"";?>/> </p>

		<p> <label for="">lname: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="lname" name="lname"
			value=<?php echo "\"".$users->getlname()."\"";?>/> </p>

		<p> <label for="">Telefono: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="phone" name="phone"
			value=<?php echo "\"".$users->getphone()."\"";?>/> </p>

		<p> <label for="">celular: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="cellphone" name="cellphone"
			value=<?php echo "\"".$users->getcellphone()."\"";?>/> </p>

		<p> <label for="">email: </label>
			<br/>
		<input class="form-control" class="form-control" type="text" id="email" name="email"
			value=<?php echo "\"".$users->getemail()."\"";?>/> </p>
<br>
		<input type="hidden" id="id" name="id" value=<?php echo "\"".$id."\"";?> />
		<input type="submit" value="Modificar" class="submit btn btn-success"/>

	</form>
     </div>
	</div>
  	

  </div>
  <div class="col-md-4"></div>
</div>
</div>





