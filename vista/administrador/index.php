<?php
    session_start();
    if(! isset ($_SESSION['idUsuario'])){
        header("location:inicioAdministrador.php");
    }
?>
<!doctype html>
<html>
  <head>
    <title>Soluciones totales</title>

          <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
          <meta name="author" content="">

            <script lang="JavaScript" src="../../js/jquery/jQuery.js" ></script>
            <script lang="JavaScript" src="../../js/jquery/jquery-ui.js" ></script>
            <script lang="JavaScript" src="../../js/jquery/jquery.validate.min.js" ></script>
      <script lang="JavaScript" src="../../js/jquery/jquery.mask.min.js" ></script>
            <script lang="JavaScript" src="../../js/administrador/index.js" ></script>

            <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">



            <script src="../../bootstrap/js/bootstrap.min.js"></script>

            <link rel="stylesheet" href="../../bootstrap/css/estiloPersonalizado.css">


        </head>
        <body>


            <nav class="navbar navbar-default alert-mio">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../../">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fCompany/frCompanyInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fCompany/frCompanyConsultas.php')">Consultar</a></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa Estudiante <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fCompany_student/frCompany_studentInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fCompany_student/frCompany_studentConsultas.php')">Consultar</a></li>

          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiante <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fStudent/frStudentInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fStudent/frStudentConsultas.php')">Consultar</a></li>

          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fUsers/frUsersInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fUsers/frUsersConsultas.php')">Consultar</a></li>

          </ul>
        </li>



       

      </ul>

       <ul class="nav navbar-nav navbar-right">
        <li><a href="../../controladora/controlSalir.php">Salir</a></li>

      </ul>



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



            <br/><br/><br/><br/><br/>


            <div id="contenedorFormulario"></div>
            
            <div id="contenedorLista"></div>

        </div> <!-- Container-->
    </body>

</html>
