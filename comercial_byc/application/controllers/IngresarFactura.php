<?php

class ingresarFactura extends CI_Controller{

	function __construct(){
	parent::__construct();
	$this->load->model('modelo_model');
        $this->load->model('Articulos');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){

                $datos['rCliente']= " ";
                $datos['rSocial']= " ";
                $datos['cPago']= " ";
                $datos['Dir']= " ";
                $datos['Cel']= " ";
                $datos['lPrecios']= " ";
                $datos['dVendedor']= " ";

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

                $this->load->view("Ventas/ingresoFactura",$datos);
	}
        public function cargar_articulo(){
                $art['pArticulo']= $this->input->post('valor_idProducto');
                $art['pDescripcion']= $this->input->post('valor_descripcion');
                $art['p$lPrecios
                $this->load->view("Ventas/ingresoFactura",$art);
        }
}
?>


               