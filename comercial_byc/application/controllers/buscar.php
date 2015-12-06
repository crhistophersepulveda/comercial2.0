<?php

class Buscar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

	public function Index (){
		echo "";
	}

/*----------------------------------------------------------------------------------
									ARTICULO
------------------------------------------------------------------------------------*/
	
	public function buscararticulo(){
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['buscar'] = $lista_articulo;
		$this->load->view("Articulo/buscarArticulo",$datos);
	}

/*----------------------------------------------------------------------------------
									CLIENTE
------------------------------------------------------------------------------------*/

	public function buscarcliente(){
		$lista_cliente = $this->modelo_model->mostrar_clientes();
		$datos['bcliente'] = $lista_cliente;
		$this->load->view("Cliente/buscarCliente",$datos);
	}

/*----------------------------------------------------------------------------------
									VENDEDOR
------------------------------------------------------------------------------------*/

	public function buscarvendedor(){
		$lista_vendedor = $this->modelo_model->mostrar_vendedores();
		$datos['bvendedor'] = $lista_vendedor;
		$this->load->view("Vendedor/buscarVendedor",$datos);
	}

/*----------------------------------------------------------------------------------
									PROVEEDOR
------------------------------------------------------------------------------------*/

	public function buscarproveedor(){
		$lista_proveedor = $this->modelo_model->mostrar_proveedor();
		$datos['bproveedor'] = $lista_proveedor;
		$this->load->view("Proveedor/buscarProveedor",$datos);
	}


}


?>