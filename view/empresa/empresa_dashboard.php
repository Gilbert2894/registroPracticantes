
<?php
require_once("../globals.php");
?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="../../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="../../assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="../../assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-file-text-o font-green-sharp"></i>
                    <span class="caption-subject font-green-sharp bold uppercase">Empresas</span>
                </div>
                <div class="actions">
                        <div class="btn-group"> 
                        <!--Titulo Herramientas-->
                        <a class="btn btn-default btn-circle" href="javascript:;" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                            <span class="hidden-480">
                                Herramientas </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                         <!--Opciones-->
                        <ul class="dropdown-menu pull-right">
                            <!--Ingresar Usuarios-->
                            <li id="agregar_instituciones">
                                <a href="javascript:;" >
                                <i class="fa fa-plus"></i>
                                    Agregar Empresa</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>

                <div class="portlet-body">
                <div class="table-container">
                    <table class="table table-bordered table-hover" id="datatable_ajax">
                        <thead>
                            <tr role="row" class="heading">

                                <th width="3%">
                                    <input type="checkbox" class="group-checkable"> 
                                </th>

                                <th width="15%" class="sorting">
                                Nombre
                                </th>
                                <th width="15%" class="sorting">
                                Telefono
                                </th>
                                <th width="15%" class="sorting">
                                Dirección
                                </th>
                                <th width="5%">
                                Acciones
                                </th>

                            </tr>

                            <tr role="row" class="filter">
                                <td></td>
                                <td>
                                    <input type="text" class="form-control form-filter input-sm" name="name_com">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-filter input-sm" name="tel_com">
                                </td>
                                <td>
                                    <input type="text" class="form-control form-filter input-sm" name="direc_com">
                                </td>                 
                                <td>
                                    <div class="margin-bottom-5">
                                            <button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Filtrar</button>
                                    </div>
                                    <button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i>Resetear</button>
                                </td>

                            </tr>
                        </thead>
                        <tbody>
                     </tbody>
                    </table>
                </div>
            </div>
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
<script src="../../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../../assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
<script src="../../assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
<script src="../../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>

<script src="<?php echo $GLOBALS['webroot'] ?>/js/datatable.js"></script>
<script src="<?php echo $GLOBALS['webroot'] ?>/js/table-ajax.js"></script>
<script language="JavaScript">

    var table_type = "instituciones";
    var webroot = "<?php echo $GLOBALS['webroot'] ?>";
    var Page = 'Pagina';
    var PageOf = 'De';
    var First = 'Primera';
    var Last = 'Ultima';
    var Next = 'Siguiente';
    var Prev = 'Anterior';
    var View = 'vista';
    var Records = 'Registros';
    var Found_total = 'Total encontrados';
    var No_records = 'No se encontraron registros';
    var editar_msj = 'Editar Empresa';
    var eliminar_msj = 'Eliminar Empresa';
    var saved_msj= 'Datos guardados correctamente';
    $(document).ready(function () {       
        
        TableAjax.init();
 
    $("body").addClass("page-sidebar-closed");
    $(".page-sidebar-menu").addClass("page-sidebar-menu-closed");
    });

</script>