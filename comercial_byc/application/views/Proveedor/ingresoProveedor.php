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
                                    <a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Ingresar<span class="fa arrow"></span></a>
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
                            </ul>
                        </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            </nav>
        </div>

     <!--******************************************************************************************************************-->
     <!--************************************************** SEGEMENTO DE LA VISTA ****************************************************************-->
     <!--******************************************************************************************************************-->
   
        <div id="page-wrapper"> <!-- 1 -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ingreso Proveedor</h1>
                </div>
            </div>
               
            <div class="row"> <!-- 2 -->
                <div class="col-lg-12"><!-- 3 -->
                    <div class="panel panel-default"  > <!-- 4 -->
                    
                        <?=form_open('/index.php/ingresarProveedor/ingresarProveedor"');
            
                            $rut = array(
                                'name' => 'rut',
                                'id' => 'rut',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el segundo array(campo email)
                            $contacto = array(
                                'name' => 'contacto',
                                'id' => 'contacto',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el tercero...(campo asunto)
                            $direccion = array(
                                'name' => 'direccion',
                                'id' => 'direccion',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el cuarto...(campo mensaje)
                            $comuna = array(
                                'name' => 'comuna',
                                'id' => 'comuna',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $cuidad = array(
                                'name' => 'ciudad',
                                'id' => 'ciudad',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $telefono = array(
                                'name' => 'telefono',
                                'id' => 'telefono',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $celular = array(
                                'name' => 'celular',
                                'id' => 'celular',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $correo = array(
                                'name' => 'correo',
                                'id' => 'correo',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $web = array(
                                'name' => 'web',
                                'id' => 'web',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $razon_social = array(
                                'name' => 'razon_social',
                                'id' => 'razon_social',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );

                            $descuento = array(
                                'name' => 'descuento',
                                'id' => 'descuento',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el botón submit de nuestro formulario se le da la clase para quedar con boobtstrap
                            $submit = array(
                                'name' => 'submit',
                                'id' => 'submit',
                                'class'=>'btn btn-default',
                                'value' => 'Ingresar',
                                'title' => 'Ingresar'
                            );
                        ?>

                        <div class="panel panel-default"  > <!-- 5 -->
                            <div class="panel-heading">
                                Ingreso de Proveedor
                            </div>
                            <div class="panel-body"> <!-- 6 -->
                                <form role="form">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Rut</label>
                                            <?php echo form_input($rut); ?>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Razon Social</label>
                                            <?php echo form_input($razon_social); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Contacto</label>
                                            <?php echo form_input($contacto); ?>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Telefono</label>
                                            <?php echo form_input($telefono); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <br />
                                        <div class="col-md-2">
                                            <label>Celular</label>
                                            <?php echo form_input($celular); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Ciudad</label>
                                             <?php echo form_input($cuidad); ?>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Comuna</label>
                                             <?php echo form_input($comuna); ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Direccion</label>
                                             <?php echo form_input($direccion); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <br />
                                        <div class="col-md-4">
                                            <label>E-Mail</label>
                                            <?php echo form_input($correo); ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Web</label>
                                            <?php echo form_input($web); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Descuento</label>
                                            <?php echo form_input($descuento); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                         <br />
                                        <div class="col-md-3">
                                             <?php echo form_submit($submit);?>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- 6 -->
                        </div> <!-- 5 -->       
                    </div><!-- 4 -->   
                </div><!-- 3 -->
            </div><!-- 2 -->
        </div><!-- 1 -->
        <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    </body>
</html>
