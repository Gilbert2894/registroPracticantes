<?php
    session_start();

    if( isset ($_SESSION['idUsuario'])){
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html>  
  <head>
    <title>UNIVERSIDAD NACIONAL</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      <link href="../../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
      <link href="../../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link href="../../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
      <link href="../../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <link href="../../assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <!-- END THEME LAYOUT STYLES -->
      <link rel="shortcut icon" href="favicon.ico" />
      <script lang="JavaScript" src="../../js/jquery/jQuery.js" ></script>
      <script lang="JavaScript" src="../../js/jquery/jquery-ui.js" ></script>
      <script lang="JavaScript" src="../../js/jquery/jquery.validate.min.js" ></script>
      <script lang="JavaScript" src="../../js/administrador/jsUsuario.js" ></script>
      <script src="../../bootstrap/js/bootstrap.min.js"></script>

      <script src="../../bootstrap/js/ie-emulation-modes-warning.js"></script>

		
	</head>
	<body class="login">

    <div class="logo">
      <a href="index.html">
          <img src="../../assets/pages/img/logouna.png" alt="" /> </a>
    </div>
     <div class="content">

      <form class="form-signin" id="frUsuarioConsultar" method="post">
        <h3 class="form-title">Inicio de Sesion</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Ingrese el nombre de usuario y contraseña. </span>
        </div>
        <div class="form-group">
          <label class="control-label visible-ie8 visible-ie9">Usuario</label>
            <div class="input-icon">
              <i class="fa fa-user"></i>
              <input class="form-control placeholder-no-fix" type="text" autocomplete="off" name="username" id="username" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Contraseña</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" name="contrasenia" id="contrasenia" placeholder="Contraseña" required>
            </div>
        </div>


        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Guardar Sesion
          </label>
        </div>
         <input class="btn green pull-right" type="submit" value="Entrar" class="submit"/> <br/>

          
          <br/>
          <a class="btn green pull-right" href="./recuperar.php">Recuperar Contraseña</a><br/>

          <!--<a class="btn btn-lg btn-primary btn-block" id="link" onclick="recuperarContrasenia()">Recuperar contraseña</a>-->
      </form>
      </div>

      <div class="copyright"> 2016 &copy; UNA Campus Sarapiquí. </div>
        
        
        <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        
        <script src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        
        <script src="../../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="../../assets/pages/scripts/login-4.min.js" type="text/javascript"></script>
	</body>
</html>