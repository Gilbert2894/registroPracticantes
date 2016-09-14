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

        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <script src="../../bootstrap/js/bootstrap.min.js"></script>

        <link href="../../bootstrap/css/bootstrap-signin.css" rel="stylesheet">
        <script src="../../bootstrap/js/ie-emulation-modes-warning.js"></script>


  </head>


	<body>

  <?php


    if( ! isset($_GET['key1']) AND  ! isset($_GET['key2']) ){ ?>

      <h1 class="">Lo lamentamos pero la url que usted esta utilizando ya no es validad</h1>

    <?php
    }else{

    ?>

       <div class="container">

      <form class="form-signin" id="frRestaurar" method="post">
        <h1 class="form-signin-heading">Ingrese contraseña nueva</h1>


        <input type="hidden" name="key1" id="key1" value="<?php echo $_GET['key1'] ;?>">
        <input type="hidden" name="key2" id="key2" value="<?php echo $_GET['key2'] ;?>">

        <label for="" class="sr-only">Contraseña</label>
        <input type="password" name="contrasenia1" id="contrasenia1" class="form-control" placeholder="">
         <br/>
        <label for="" class="sr-only">Vuelva a escribir contraseña</label>
        <input type="password" name="contrasenia2" id="contrasenia2" class="form-control" placeholder="">

        <br/>
         <input class="btn btn-lg btn-primary btn-block" type="submit" value="Enviar" class="submit"/> <br/>

          <a class="btn btn-lg btn-primary btn-block" href="./inicioAdministrador.php">Atras</a><br/>

          <!--<a class="btn btn-lg btn-primary btn-block" id="link" onclick="recuperarContrasenia()">Recuperar contraseña</a>-->
      </form>
      </div>

     <?php }  ?>









      <div class="modal fade show.bs.modal" id="myModalr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Recuperacion de contraseña</h4>
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
