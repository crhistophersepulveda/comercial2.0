<?php

class Modificar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}
	public function Index (){
		echo "es una prueba del controlador";
	}
/*----------------------------------------------------------------------------------
									ARTICULO
------------------------------------------------------------------------------------*/

	public function modificararticulo(){
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['modificar'] = $lista_articulo;
		$this->load->view("Articulo/modificarArticulo",$datos);
	}
/*----------------------------------------------------------------------------------
									CLIENTE
------------------------------------------------------------------------------------*/

	public function modificarcliente(){
		$lista_cliente = $this->modelo_model->mostrar_clientes();
		$datos['modificarcliente'] = $lista_cliente;
		$this->load->view("Cliente/modificarCliente",$datos);
	}

/*----------------------------------------------------------------------------------
									VENDEDOR
------------------------------------------------------------------------------------*/

	public function modificarvendedor(){
		$lista_vendedor = $this->modelo_model->mostrar_vendedores();
		$datos['modificarvendedor'] = $lista_vendedor;
		$this->load->view("Vendedor/modificarVendedor",$datos);
	}



}
?>