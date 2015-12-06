<?php

class borrarProveedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

public function Index (){
		echo "es una prueba del controlador";
	}

/*------------------------------------------------------------------------------------/
									ARTICULOS
-------------------------------------------------------------------------------------*/

	public function borrar_producto(){
		
		$idProducto = $this->uri->segment(3);
		$this->modelo_model->borrar_producto($idProducto);
		redirect("index.php/modificar/modificararticulo");
	}

/*------------------------------------------------------------------------------------/
									VENDEDOR
-------------------------------------------------------------------------------------*/

	public function borrar_vendedor(){

		$rut = array('idd' => $this->input->post('valor_enviar'));
		echo "el rut es: ".$rut['idd'];
		$this->modelo_model->borrar_vendedor($rut);
		redirect('index.php/modificar/modificarvendedor');
	}

/*------------------------------------------------------------------------------------/
									VENDEDOR
-------------------------------------------------------------------------------------*/

	public function borrar_proveedor(){

		$rut = array('idd' => $this->input->post('valor_enviar'));
		echo "el rut es: ".$rut['idd'];
		$this->modelo_model->borrar_proveedor($rut);
		redirect('index.php/modificarproveedor');
	}



}

