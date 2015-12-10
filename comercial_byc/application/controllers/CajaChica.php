<?php

class CajaChica extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}
	public function Index (){
		echo "es una prueba del controlador";
	}
/*----------------------------------------------------------------------------------
									CAJA CHICA
------------------------------------------------------------------------------------*/

	public function Egreso(){

		$this->load->view("Caja_chica/Egreso");
	}

	public function Ingreso(){
		$this->load->view("Caja_chica/Ingreso");
	}

	public function CajaTotal(){
		$this->load->view("Caja_chica/CajaTotal");
	}
}
?>