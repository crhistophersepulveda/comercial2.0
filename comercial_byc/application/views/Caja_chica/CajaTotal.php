<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Comercial B & C</title> <!--Titulo pestaña-->
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMERCIAL B & C LIMITADA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Desconectar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <!--MODULO DERECHO AQUIIIIII ABAJO-->

       
        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <!--INICIO-->
                        <li>
                            <a href="<?php echo base_url() ?>index.php/index/Index"><i class="fa fa-laptop"></i><b>Inicio</b><span class="fa arrow"></span></a>
                        </li>

                        <!--1ºer Articulos-->
                         <li>

                            <a href="#"><i class="fa fa-th-large"></i> Artículos<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/ingresarArticulo"><i class="glyphicon glyphicon-plus-sign"></i>Ingresar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/modificar/modificararticulo"><i class="glyphicon glyphicon-minus-sign"></i> Modificar / Eliminar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/buscar/buscararticulo"><i class="fa fa-search-plus"></i> Buscar<span class="fa arrow"></span></a>
                                </li>
                                
                            </ul>
                        </li>

                        <!--2ºdo Venta-->

                        <li>

                            <a href="#"><i class="fa fa-shopping-cart"></i> Ventas<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-file-text-o"></i> Factura<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file-text-o"></i> Notas de Crédito<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-file-text-o"></i> Presupuestos<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-search-plus"></i> Buscar Factura<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        </li>

                        <!--3ero Compras-->
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i> Compras<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-file-text-o"></i> Ingresar Facturar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-search-plus"></i> Buscar <span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        </li>


                        <!--4to Clientes-->
                                       <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <!--Direccionar a la funcion index del controlador ingresar clientes-->
                                    <a href="<?php echo base_url() ?>index.php/ingresarCliente/Index"><i class="glyphicon glyphicon-plus-sign"></i> Ingresar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/modificar/modificarcliente"><i class="glyphicon glyphicon-minus-sign"></i> Modificar / Eliminar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/buscar/buscarcliente"><i class="fa fa-search-plus"></i> Buscar <span class="fa arrow"></span></a>
                                </li>
                                
                            </ul>
                        </li>


                        <!--5to Vendedor-->

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>Vendedores<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/ingresarVendedor"><i class="glyphicon glyphicon-plus-sign"></i> Ingresar<span class="fa arrow"></span></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/modificarVendedor/modificarVendedor"><i class="glyphicon glyphicon-minus-sign"></i> Modificar / Eliminar<span class="fa arrow"></span></a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo base_url() ?>index.php/buscar/buscarVendedor"><i class="fa fa-search-plus"></i> Buscar<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        </li>
                    <!--6to Proveedor-->

                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>Proveedor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url() ?>index.php/ingresarProveedor"><i class="glyphicon glyphicon-plus-sign"></i> Ingresar<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/modificarProveedor/modificarProveedor"><i class="glyphicon glyphicon-minus-sign"></i> Modificar / Eliminar<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/buscar/buscarProveedor"><i class="fa fa-search-plus"></i> Buscar<span class="fa arrow"></span></a>
                            </li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-book"></i> Caja Chica<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url() ?>index.php/ingresarCaja"><i class="glyphicon glyphicon-plus-sign"></i> Ingresar<span class="fa arrow"></span></a>
                            </li>
                            
                           
                        </ul>
                    </li>
                        <!--7to Reportes-->

                        <li>

                            <a href="#"><i class="fa fa-book"></i> Reportes<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Artículos<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Lista de Articulos</a>
                                        </li>
                                        <li>
                                            <a href="#">Lista de Artículos Detallado</a>
                                        </li>

                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Ventas<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Ventas por Artículo</a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas por Fecha</a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas por Marca</a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas Total </a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas Total Detalle </a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>



                                <li>
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Compras<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Compras por Artículo</a>
                                        </li>
                                        <li>
                                            <a href="#">Compras por Fecha</a>
                                        </li>
                                        <li>
                                            <a href="#">Compras por Proveedor</a>
                                        </li>
                                        <li>
                                            <a href="#">Compras Total </a>
                                        </li>
                                        <li>
                                            <a href="#">Compras Total Detalle </a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i>Clientes<span class="fa arrow"></span></a>

                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Lista Clientes</a>
                                        </li>
                                        <li>
                                            <a href="#">Clientes Frecuentes</a>
                                        </li>

                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i>Vendedores<span class="fa arrow"></span></a>

                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Lista Vendedores</a>
                                        </li>
                                        <li>
                                            <a href="#">Comisiones Pagadas</a>
                                        </li>
                                        <li>
                                            <a href="#">Comisiones por Pagar</a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas por Vendedor</a>
                                        </li>
                                        <li>
                                            <a href="#">Ventas por Vendedor Detalle </a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-user fa-fw"></i>Caja Chica<span class="fa arrow"></span></a>

                                    <ul class="nav nav-third-level">
                                        
                                        <li>
                                            <a href="<?php echo base_url() ?>index.php/CajaChica/Ingreso">Ingresos Detallado</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>index.php/CajaChica/Egreso">Egresos Detallado</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() ?>index.php/CajaChica/CajaTotal">Caja Total</a>
                                        </li>
                                        
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
    </div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="page-header">Caja Chica / Actual</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->                  

            <div class="panel panel-default">
                        <div class="panel-heading">
                            Caja Chica / Actual
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ingreso</th>
                                            <th>Egreso</th>
                                            <th>Caja Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = $this->db->query("SELECT ((SELECT SUM(TOTAL) FROM Caja_chica WHERE OPERACION='INGRESO')-(SELECT SUM(TOTAL) FROM Caja_chica WHERE OPERACION='EGRESO')) AS DIFERENCIA FROM Caja_chica GROUP BY DIFERENCIA");
                                            $sql1 = $this->db->query("select sum(total) as total from Caja_chica where operacion='INGRESO'");
                                            $sql2 = $this->db->query("select sum(total) as total from Caja_chica where operacion='EGRESO'");
                                            
                                            foreach($sql->result() as $resultado){
                                                foreach($sql1->result() as $res){
                                                    echo"<td>$ $res->total</td>";
                                                }
                                                foreach($sql2->result() as $res2){
                                                    echo"<td>$ $res2->total</td>";
                                                }

                                            echo"<td>$ $resultado->DIFERENCIA</td> ";
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
            <!-- /.row -->
        </div>

            
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>
