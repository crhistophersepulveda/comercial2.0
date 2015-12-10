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
        <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">


        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

          <!-- ... -->
  
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
        
        <!--******************************************************************************************************************-->
        <!--************************************************** SEGEMENTO DE LA VISTA ****************************************************************-->
        <!--******************************************************************************************************************-->
   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ingreso Articulo</h1>
                </div>
            </div>
               
            <div class="row"><!-- 2 -->
                <div class="col-lg-12"><!-- 3 -->
                    <div class="panel panel-default" ><!-- 4 -->
                        <?=form_open('/index.php/ingresarArticulo/ingresararticulo');
                            //aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
                            //creamos los arrays que compondran nuestro formulario
                            //primer array con el input que se llamará nombre y será donde introduciremos el mismo
                            $idProducto = array(
                                'name' => 'idProducto',
                                'id' => 'idProducto',
                                'size' => '50',
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el segundo array(campo email)
             
                            $descripcion = array(
                                'name' => 'descripcion',
                                'id' => 'descripcion',
                                'size' => '50',
                                'class'=>'form-control'
                            );
             
                            //el tercero...(campo asunto)
                            $ubicacion = array(
                                'name' => 'ubicacion',
                                'id' => 'ubicacion',
                                'size' => '50',
                                'class'=>'form-control'
                            );
             
                            //el cuarto...(campo mensaje)
                            $stock = array(
                                'name' => 'stock',
                                'id' => 'stock',
                                'class'=>'form-control'
                            );

                            $stock_minimo = array(
                                'name' => 'stock_minimo',
                                'id' => 'stock_minimo',
                                'class'=>'form-control'
                            );
                            $this->load->helper('date');
                            $datestring = "%Y/%m/%d ";
                            $time = time();
                                            
                            $fecha_compra = array(
                                'name' => 'fecha_compra',
                                'id' => 'fecha_compra',
                                'class'=>'form-control',
                                'value' => mdate($datestring, $time)
                            );

                            $costo = array(
                                'name' => 'costo',
                                'id' => 'costo',
                                'class'=>'form-control'
                            );

                            $ferretera = array(
                                'name' => 'ferretera',
                                'id' => 'ferretera',
                                'class'=>'form-control'
                            );

                            $especialista = array(
                                'name' => 'especialista',
                                'id' => 'especialista',
                                'class'=>'form-control'
                            );

                            $constructora = array(
                                'name' => 'constructora',
                                'id' => 'constructora',
                                'class'=>'form-control'
                            );
                            //el botón submit de nuestro formulario se le da la clase para quedar con boobtstrap
                            $submit = array(
                                'name' => 'submit',
                                'id' => 'submit',
                                'class'=>'btn btn-default',
                                'value' => 'Guardar',
                                'title' => 'Guardar'
                            );


                        ?>

                        <div class="panel panel-default"  ><!-- 5 -->

                            <div class="panel-heading">
                                Ingreso de Articulo
                            </div>

                            <div class="panel-body"><!-- 6 -->
                                <form >
                                    <?php echo validation_errors(); ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Codigo Articulo:</label>
                                            <?php echo form_input($idProducto); ?>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Descripcion</label>
                                            <?php echo form_input($descripcion); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Ubicacion</label>
                                            <?php echo form_input($ubicacion); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <br />
                                        <div class="col-md-2">
                                            <label>Stock</label>
                                            <?php echo form_input($stock); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Stock minimo</label>
                                            <?php echo form_input($stock_minimo); ?>
                                        </div>

                                            <div class="col-md-4">
                                            <label>Proveedor</label>
                                            <select class="form-control" name="proveedor_rut"  >
                                                <?php 
                                            // a si se hacen estas malditas consultas <3 
                                            $sql=$this->db->query('select rut, razon_social from Proveedor');
                                            foreach($sql->result() as $result){
                                                echo "<option>$result->rut $result->razon_social</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>

                                        <div class="col-md-3">
                                            <label>Fecha de compra</label>
                                             <div class="form-group input-group">
                                                <?php echo form_input($fecha_compra); ?>
                                            </div>
                                        </div> 
                                    </div>


                                    <div class="row">
                                        <br />
                                        <div class="col-md-2">
                                            <label>Costo</label>
                                             <?php echo form_input($costo); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Ferretera</label>
                                            <?php echo form_input($ferretera); ?>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Especialista</label>
                                             <?php echo form_input($especialista); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Constructora</label>
                                            <?php echo form_input($constructora); ?>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <br />
                                        <div class="col-md-2">
                                            <label>Unidad</label>
                                            <select class="form-control" name="unidad"  >
                                            <?php 
                                            // a si se hacen estas malditas consultas <3 
                                            $sql=$this->db->query('select Unidad from Unidad');
                                            foreach($sql->result() as $result){
                                                echo "<option>$result->Unidad</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Marca</label>
                                            <select class="form-control" name="marca"  >
                                            <?php 
                                            // a si se hacen estas malditas consultas <3 
                                            $sql=$this->db->query('select Marca from Marca');
                                            foreach($sql->result() as $result){
                                                echo "<option>$result->Marca</option>";
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Rubro</label>
                                            <select class="form-control" name="rubro"  >
                                                <?php 
                                            // a si se hacen estas malditas consultas <3 
                                            $sql=$this->db->query('select Rubro from Rubro');
                                            foreach($sql->result() as $result){
                                                echo "<option>$result->Rubro</option>";
                                            }
                                            ?>
                                            </select>
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
                        </div><!-- 5 -->      
                    </div><!-- 4 -->
                </div><!-- 3 -->
            </div><!-- 2 -->
        </div><!-- 1 -->
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap-datetimepicker.min.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    </body>
</html>
