<!DOCTYPE html>
<html>
  <head>
    <title>Soluciones totales</title>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">

        <script lang="JavaScript" src="../../js/jquery/jQuery.js" ></script>
        <script lang="JavaScript" src="../../js/jquery/jquery-ui.js" ></script>
        <script lang="JavaScript" src="../../js/jquery/jquery.validate.min.js" ></script>
        <script lang="JavaScript" src="../../js/administrador/jsUsuario.js" ></script>
        <script lang="JavaScript" src="../../js/administrador/captcha.js" ></script>

        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <script src="../../bootstrap/js/bootstrap.min.js"></script>

        <link href="../../bootstrap/css/bootstrap-signin.css" rel="stylesheet">
        <script src="../../bootstrap/js/ie-emulation-modes-warning.js"></script>


	</head>
	<body>

     <div class="container">

      <form class="form-signin" id="frRecuperar" method="post">
        <h1 class="form-signin-heading">Recuperar contraseña</h1>
        <label for="inputEmail" class="sr-only">Correo Electronico</label>
        <input type="text" name="correoUsuario" id="correoUsuario" class="form-control" placeholder="Correo Electronico" required autofocus>
        <!--<input type="email" name="correoUsuario" id="correoUsuario" class="form-control" placeholder="Email address" required autofocus>-->
        <br/>
        <div class="g-recaptcha" data-sitekey="6LdwKBwTAAAAAHncGH4VQliv9PBLbh2xk6VzreT8"></div>
        <br/>
         <input class="btn btn-lg btn-primary btn-block" type="submit" value="Recuperar" class="submit"/> <br/>

          <a class="btn btn-lg btn-primary btn-block" href="./inicioAdministrador.php">Atras</a><br/>

          <!--<a class="btn btn-lg btn-primary btn-block" id="link" onclick="recuperarContrasenia()">Recuperar contraseña</a>-->
      </form>
      </div>





      <div class="modal fade show.bs.modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Recuperacion de correo electronico</h4>
            </div>
            <div class="modal-body">
               <p> <div id="contenedorMensaje" ></div></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>
	</body>

</html>
