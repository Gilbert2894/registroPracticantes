<?php
    session_start();
    if(! isset ($_SESSION['idUsuario'])){
        header("location:inicioAdministrador.php");
    }
?>
<!doctype html>
<html>
  <head>
    <title>UNIVERSIDAD NACIONAL</title>

        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
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
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <!--<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../bootstrap/css/estiloPersonalizado.css">-->
  </head>
  <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

    <div class="page-header navbar navbar-fixed-top" style="background:#cd362c">
            <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
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
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
    <div class="container">
    <div class="page-container">
      <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="heading">
                            <h3 class="uppercase">Menu Principal</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="../../vista/administrador/index.php" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-home"></i>
                                <span class="title">Inicio</span>
                                </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-industry"></i>
                                <span class="title">Empresa</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a onclick="cargarFormulario('./fCompany/frCompanyInsertar.php')" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a onclick="cargarLista('./fCompany/frCompanyConsultas.php')" class="nav-link ">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span class="title">Consultar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="glyphicon glyphicon-random"></i>
                                <span class="title">Empresa Estudiante</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a onclick="cargarFormulario('./fCompany_student/frCompany_studentInsertar.php')" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="./fCompany_student/frCompany_studentConsultas.php" class="nav-link ">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span class="title">Consultar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-graduation-cap"></i>
                                <span class="title">Estudiante</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a onclick="cargarFormulario('./fStudent/frStudentInsertar.php')" class="nav-link ">
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a onclick="cargarLista('./fStudent/frStudentConsultas.php')" class="nav-link ">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span class="title">Consultar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-group"></i>
                                <span class="title">Usuarios</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a onclick="cargarFormulario('./fUsers/frUsersInsertar.php')" class="nav-link ">
                                        
                                        <i class="fa fa-plus"></i>
                                        <span class="title">Agregar</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a onclick="cargarLista('./fUsers/frUsersConsultas.php')" class="nav-link ">
                                        <i class="glyphicon glyphicon-file"></i>
                                        <span class="title">Consultar</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- END SIDEBAR MENU -->
                </div>
                <div id="contenedorLista"></div>
                <div id="contenedorFormulario"></div>
                
                <!-- END SIDEBAR -->
            </div>

    </div>
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; UNIVERSIDAD NACIONAL.
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    </div>

    
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
        <script src="../../assets/pages/scripts/jquery.validate.min.js" type="text/javascript"></script>
        
        <script src="../../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
       
    </body>

</html>
