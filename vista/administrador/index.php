<?php
    session_start();
    if(! isset ($_SESSION['idUsuario'])){
        header("location:inicioAdministrador.php");
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
        <link href="../../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
			
			<script lang="JavaScript" src="../../js/jquery/jQuery.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jquery-ui.js" ></script>
			<script lang="JavaScript" src="../../js/jquery/jquery.validate.min.js" ></script>
			<script lang="JavaScript" src="../../js/administrador/index.js" ></script>	

			<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
					

			
			<script src="../../bootstrap/js/bootstrap.min.js"></script>

			<link rel="stylesheet" href="../../bootstrap/css/estiloPersonalizado.css">	


		</head>
		<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
      <div class="page-header navbar navbar-fixed-top" style="background:#cd362c">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../../assets/pages/img/UNA.png" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Perfil </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="../../assets/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="../../controladora/controlSalir.php">
                                            <i class="icon-key"></i>Salir</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
      </div>
      <div class="clearfix"> </div>
        <!-- BEGIN CONTAINER -->
      <div class="container">
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse" style="background:#cd362c">
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            <a href="../../" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Inicio</span>
                                
                            </a>
                        </li>
                        <li class="nav-item  active open">
                            <a onclick="cargarFormulario('./fInformacionEmpresa/')" bclass="nav-link nav-toggle">
                                <i class="fa fa-building-o"></i>
                                <span class="title">Empresas</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Estudiantes</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Configuración</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>UNIVERSIDAD NACIONAL</h1>
                        </div>
                        <div class="page-toolbar">
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; UNIVERSIDAD NACIONAL.
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>


	 <!--<nav class="navbar navbar-default alert-mio">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
     <!--<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>  
      <a class="navbar-brand" href="../../">Inicio</a>    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a onclick="cargarFormulario('./fInformacionEmpresa/')">Empresa</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Producto<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fProducto/frProductoInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarFormulario('./fProducto/frProductoBuscar.php')">Consultar</a></li>
            
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categoria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fCategoria/frCategoriaInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fCategoria/frCategoriaConsultas.php')">Consultar</a></li>
            
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Banner <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a onclick="cargarFormulario('./fBanner/frBannerInsertar.php')">Ingresar</a></li>
            <li><a onclick="cargarLista('./fBanner/frBannerConsultas.php')">Consultar</a></li>
            
          </ul>
        </li>

        <li><a href="#" onclick="cargarFormulario('./fPerfil/perfil.php')">Perfil</a></li>

      </ul>

       <ul class="nav navbar-nav navbar-right">
        <li><a href="../../controladora/controlSalir.php">Salir</a></li>
       
      </ul>


     
    </div><!-- /.navbar-collapse -->
   <!--</div><!-- /.container-fluid -->
 <!--</nav>-->



    		<br/><br/><br/><br/><br/>
	

			<div id="contenedorFormulario"></div>
			<div id="contenedorMensaje"></div>
			<div id="contenedorLista"></div>
		    <script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../../assets/global/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
		</div> <!-- Container-->
	</body>

</html>
