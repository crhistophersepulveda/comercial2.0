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
									VENDEDOR
-------------------------------------------------------------------------------------*/

	public function borrar_proveedor(){

		$rut = array('idd' => $this->input->post('valor_enviar'));
		echo "el rut es: ".$rut['idd'];
		$this->modelo_model->borrar_proveedor($rut);
		redirect('index.php/modificarproveedor');
	}



}

