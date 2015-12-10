<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Comercial B & C</title> <!--Titulo pestaña-->
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
        <![endif]-->        <!-- Bootstrap Core CSS -->

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
   
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ingreso Factura</h1>
                </div>
            </div>
               
            <div class="row"><!-- 2 -->
                <div class="col-lg-12"><!-- 3 -->
                    <div class="panel panel-default" ><!-- 4 -->
                        <?=form_open('/index.php/ingresarCliente/ingresarcliente"');
                            //aqui se procesará nuestro formulario, controlador comentarios, función insertar_comentarios
                            //creamos los arrays que compondran nuestro formulario
                            //primer array con el input que se llamará nombre y será donde introduciremos el mismo
                            $N_factura = array(
                                'name' => 'N_factura',
                                'id' => 'N_factura',
                             
                                'class'=>'form-control' // darla la clade de boobtstrap
                            );
             
                            //el segundo array(campo email)
             
                            $Fecha_venta = array(
                                'name' => 'Fecha_venta',
                                'id' => 'Fecha_venta',
                          
                                'class'=>'form-control'
                            );
             
                            //el tercero...(campo asunto)
                            $direccion_cliente = array(
                                'name' => 'direccion_cliente',
                                'id' => 'direccion_cliente',
                                
                                'class'=>'form-control',
                                'value' => $Dir
                            );

                            $celular_cliente = array(
                                'name' => 'direccion_cliente',
                                'id' => 'direccion_cliente',
                               
                                'class'=>'form-control',
                                'value' => $Cel
                            );
             
                            //el cuarto...(campo mensaje)
                            $condicion_pago = array(
                                'name' => 'condicion_pago',
                                'id' => 'condicion_pago',
                                'class'=>'form-control',
                                'value' => $cPago
                            );

                            $cliente_rut = array(
                                'name' => 'cliente_rut',
                                'id' => 'cliente_rut',
                                'class'=>'form-control',
                                'value' => $rCliente
                            );

                            $cliente_nombre = array(
                                'name' => 'cliente_nombre',
                                'id' => 'cliente_nobmre',
                                'class'=>'form-control',
                                'value' => $rSocial
                            );
                            
                            $lista_precio = array(
                                'name' => 'lista_precio',
                                'id' => 'lista_precio',
                                'class'=>'form-control',
                                'value' => $lPrecios
                            );

                            $Vendedor = array(
                                'name' => 'Vendedor',
                                'id' => 'Vendedor',
                                'class'=>'form-control',
                                'value' => $dVendedor
                            );

                            $Neto = array(
                                'name' => 'Neto',
                                'id' => '$Neto',
                                'class'=>'form-control'
                            );

                            $Iva = array(
                                'name' => 'Iva',
                                'id' => 'Iva',
                                'class'=>'form-control'
                            );

                            $Descuento = array(
                                'name' => 'Descuento',
                                'id' => 'Descuento',
                                'class'=>'form-control'
                            );

                            $Total = array(
                                'name' => 'Total',
                                'id' => 'Total',
                                'class'=>'form-control'
                            );

                            $Fecha_pago = array(
                                'name' => 'Fecha_pago',
                                'id' => 'Fecha_pago',
                                'class'=>'form-control'
                            );

                            //el botón submit de nuestro formulario se le da la clase para quedar con boobtstrap
                            $submit = array(
                                'name' => 'submit',
                                'id' => 'submit',
                                'class'=>'btn btn-default',
                                'value' => 'Facturar',
                                'title' => 'Facturar'
                            );
                        ?>
                        <?=form_open('/index.php/ingresarArticulo/ingresararticulo"');

                            $idProducto = array(
                                'name'=>'idProducto',
                                'id'=>'idProducto',
                                'class'=>'form-control'
                            );
                            
                        ?>

                        <div class="panel panel-default"  ><!-- 5 -->

                            <div class="panel-heading">
                                Datos de Facturación
                            </div>

                            <div class="panel-body"><!-- 6 -->
                                <form >
                                    <!-- Mensajes de error :D -->
                                    <?php echo validation_errors(); ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label>Factura nº :</label>
                                            <?php echo form_input($N_factura); ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <br />
                                        <div class="col-md-3">
                                            <label>Rut Cliente :</label>
                                            <div class="form-group input-group">
                                            <?php echo form_input($cliente_rut); ?>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" data-toggle='modal' data-target='#Clientes'><i class="fa fa-search" style='height:20px'></i>
                                                </button>
                                            </span>
                                        </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label>Nombre o razon social :</label>
                                             <?php echo form_input($cliente_nombre); ?>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Condicion de pago: </label>
                                            <?php echo form_input($condicion_pago); ?>
                                        </div> 
                                    </div>


                                    <div class="row">
                                        <br />
                                        <div class="col-md-5">
                                            <label>Direccion: </label>
                                            <?php echo form_input($direccion_cliente); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Celular</label>
                                            <?php echo form_input($celular_cliente); ?>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Lista de Precio</label>
                                            <?php echo form_input($lista_precio); ?>
                                        </div>
                                    </div> 

                                    <div class="row">
                                        <br />
                                        <div class="col-md-4">
                                            <label>Vendedor</label>
                                             <?php echo form_input($Vendedor); ?>
                                        </div>
                                    </div>

                                    <div class='row'>
                                        <br/>
                                        <form method='post' action='/index.php/ingresarArticulo/ingresararticulo');>
                                        <div class='col-md-3'>
                                            <label>Codigo Artículo:</label>
                                            <span class="input-group-btn" >
                                                
                                                <button class="btn btn-default" type="button" data-toggle='modal' data-target='#Articulos'><i class="fa fa-search"></i>
                                                </button>
                                            </span>

                                        </div>
                                    </form>
                                    </div>
                                    <br/>
                                    <div class='row'>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Cantidad</th>
                                                                <th>Codigo</th>
                                                                <th>Descripción</th>
                                                                <th>Valor</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <br />
                                        <div class="col-md-3">
                                            <?php echo form_submit($submit);?>
                                        </div>
                                    </div>  
                                 </form>


                                <!-- Modal de clientes -->
                                
                                    <div class="modal fade in" id="Clientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">Lista de Clientes </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="panel panel-default">
                                                        <!-- /.panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="dataTable_wrapper">
                                                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                                  
                                                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>Rut</th>
                                                                                <th>Razón Social</th>
                                                                                <th>Lista Precio</th>
                                                                                <th>Seleccionar</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php
                                                                            $sql=$this->db->query("select * from Cliente");

                                                                            foreach ($sql-> result() as $listacliente){
                                                                                  
                                                                            echo "
                                                                                    
                                                                            <tr>                     
                                                                                <td>$listacliente->rut</td>
                                                                                <td>$listacliente->nombre_razon</td>
                                                                                <td>$listacliente->Lista_precios_Lista_precio</td>
                                                                                            
                                                                                <td>
                                                                                    <form method='post' action='";?><?php echo base_url() ;?><?echo"index.php/ingresarFactura/cargar_cliente'> 

                                                                                        <input type='hidden' value='$listacliente->rut' name='valor_rut'/input>

                                                                                        <input type='hidden' value='$listacliente->nombre_razon' name='valor_nombre_razon'/input>

                                                                                        <input type='hidden' value='$listacliente->Lista_precios_Lista_precio' name='valor_Lista_precios_Lista_precio'/input>

                                                                                        <input type='hidden' value='$listacliente->Vendedor_rut' name='valor_vendedor'/input>

                                                                                        <input type='hidden' value='$listacliente->direccion' name='valor_direccion'/input>

                                                                                        <input type='hidden' value='$listacliente->condicion_pago' name='valor_condicion_pago'/input>

                                                                                        <input type='hidden' value='$listacliente->celular' name='valor_celular'/input>
                                                                                            
                                                                                        <button type='submit' class='btn btn-info btn-circle' d > <i class='fa fa-check'></i></button>
                                                                                   </form>    
                                                                                </td>
                                                                            </tr>

                                                                            ";
                                                                        }
                                                                         ?>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>  
                                                </div>
                                            <div class="modal-footer">
                                            </div>
                                         </div>
                                      </div>                                    
                                    </div>

                                
                             <!-- Modal de clientes -->

                             <!-- Modal de Productos -->
                                    <div class="modal fade in" id="Articulos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title" id="myModalLabel">Lista de Clientes </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="panel panel-default">
                                                        <!-- /.panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="dataTable_wrapper">
                                                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                                                  
                                                                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example1" role="grid" aria-describedby="dataTables-example_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th>Codigo</th>
                                                                                <th>Descripción</th>
                                                                                <th>P.<?php echo" $lPrecios"?></th>
                                                                                <th>Seleccionar</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php
                                                                            $sql1=$this->db->query("select p.*, p.$lPrecios precios from Producto p where p.$lPrecios = $lPrecios ");

                                                                            foreach ($sql1-> result() as $listaprod){
                                                                                  
                                                                            echo "
                                                                                    
                                                                            <tr>                     
                                                                                <td>$listaprod->idProducto</td>
                                                                                <td>$listaprod->descripcion</td>
                                                                                <td>$listaprod->precios</td>
                                                                                            
                                                                                <td>
                                                                                    <form method='post' action='";?><?php echo base_url() ;?><?echo"index.php/ingresarFactura/cargar_articulo'> 

                                                                                        <input type='hidden' value='$listaprod->idProducto' name='valor_idProducto'/input>
                                                                                            
                                                                                        <button type='submit' class='btn btn-info btn-circle' d > <i class='fa fa-check'></i></button>
                                                                                   </form>
                                                                                </td>
                                                                            </tr>

                                                                            ";
                                                                        }
                                                                         ?>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <!-- /.table-responsive -->
                                                        </div>
                                                        <!-- /.panel-body -->
                                                    </div>  
                                                </div>
                                            <div class="modal-footer">
                                            </div>
                                         </div>
                                      </div>                                    
                                    </div>
                               

                            <!-- Modal de Productos -->


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
    <script>
        $(document).ready(function () {
            $('#dataTables-example1').DataTable({
                responsive: true
            });
        });
    </script>
</html>
