<?php

class ingresarFactura extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('modelo_model');
        $this->load->model('Articulos');
        $this->load->model('Facturas');
        $this->load->model('Articulos_aux');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){

                $datos['rCliente']= " ";
                $datos['rSocial']= " ";
                $datos['cPago']= " ";
                $datos['Dir']= " ";
                $datos['Cel']= " ";
                $datos['lPrecios']= "ferretera";
                $datos['dVendedor']= " ";
                $datos['L_articulos']= $this->db->query("select * from Productos_aux");

		$this->load->view("Ventas/ingresoFactura",$datos);
	}
	// controlador de insercion
	public function cargar_cliente(){

                $datos['rCliente']= $this->input->post('valor_rut');
                $datos['rSocial']= $this->input->post('valor_nombre_razon');
                $datos['cPago']= $this->input->post('valor_condicion_pago');
                $datos['Dir']= $this->input->post('valor_direccion');
                $datos['Cel']= $this->input->post('valor_celular');
                $datos['lPrecios']= $this->input->post('valor_Lista_precios_Lista_precio');
                $datos['dVendedor']= $this->input->post('valor_vendedor');
                $datos['L_articulos']= $this->db->query("select * from Productos_aux");

                $this->load->view("Ventas/ingresoFactura",$datos);
	}

        public function cargar_articulo(){
                $datos['rCliente']= $this->input->post('valor_rut');
                $datos['rSocial']= $this->input->post('valor_nombre_razon');
                $datos['cPago']= $this->input->post('valor_condicion_pago');
                $datos['Dir']= $this->input->post('valor_direccion');
                $datos['Cel']= $this->input->post('valor_celular');
                $datos['lPrecios']= $this->input->post('valor_Lista_precios_Lista_precio');
                $datos['dVendedor']= $this->input->post('valor_vendedor');
                $id_articulo= $this->input->post('valor_codigo');
                $nombre= $this->input->post('valor_descrpcion');
                $cantidad= $this->input->post('valor_cantidad');
                $precio= $this->input->post('valor_precio');
                $total= (int)$cantidad*(int)$precio;

                $Ingresar_articulo_aux = $this->Articulos_aux->Ingresar_articulo_aux($id_articulo, $nombre, $precio, $cantidad, $total);
            

                $datos['L_articulos']= $this->db->query("select * from Productos_aux");
               
                $this->load->view("Ventas/ingresoFactura",$datos);
        }

        public function borrar_articulo(){

                $articulo = array('idd' => $this->input->post('valor_producto'));
                $this->Articulos_aux->borrar_producto_aux($articulo);
                $datos['rCliente']= $this->input->post('valor_rut');
                $datos['rSocial']= $this->input->post('valor_nombre_razon');
                $datos['cPago']= $this->input->post('valor_condicion_pago');
                $datos['Dir']= $this->input->post('valor_direccion');
                $datos['Cel']= $this->input->post('valor_celular');
                $datos['lPrecios']= $this->input->post('valor_Lista_precios_Lista_precio');
                $datos['dVendedor']= $this->input->post('valor_vendedor');
                $datos['L_articulos']= $this->db->query("select * from Productos_aux");

                $this->load->view("Ventas/ingresoFactura",$datos);       
        }

        public function ingresarfactura(){
                        
                $n_factura=$this->input->post('N_factura');
                $fecha_venta=$this->input->post('Fecha_venta');
                $condicion_pago=$this->input->post('condicion_pago');
                $Cliente_rut=$this->input->post('cliente_rut');
                $Vendedor_rut=$this->input->post('Vendedor');
                $neto=$this->input->post('Sub_total');
                $iva=$this->input->post('IVA');
                $descuento=$this->input->post('descuento');
                $aux=$this->input->post('Total');
                $aux2= (int)$aux/100;
                $total= (int)$aux2*(100-(int)$descuento);
                if (strcmp (  $condicion_pago ,  'Efectivo' )==0) {
                        $estado=1;
                }
                else{
                        $estado=0;
                }

                $fecha_pago=$this->input->post('Fecha_pago');

                $Ingresar_factura = $this->Facturas->Ingresar_factura($n_factura, $fecha_venta, $condicion_pago, $Cliente_rut, $Vendedor_rut, $neto, $iva, $descuento,$total,$estado, $fecha_pago);


                $sql=$this->db->query("select * from Productos_aux");

                foreach ($sql-> result() as $Articulos){

                    $Actualizar_stock = $this->Articulos->Modificar_stock($Articulos->id_producto, $Articulos->cantidad);
                    $Ingresar_articulo = $this->Facturas->Ingresar_Factura_compra_Producto($n_factura,$Articulos->id_producto,$Articulos->cantidad);
                    $articulo = array('idd' => $Articulos->id_producto);
                    $this->Articulos_aux->borrar_producto_aux($articulo);

                }
                      
                //ahora procesamos los datos hacía el modelo que debemos crear
                
                redirect('index.php/ingresarFactura/Index');;   
        }

}
?>


               