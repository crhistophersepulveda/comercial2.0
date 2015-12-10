<?php

class ingresarCaja extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
        $this->load->model('Caja');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("Caja_chica/ingresoCaja");
	}
	// controlador de insercion
	public function ingresarcaja(){

                $descripcion = $this->input->post('descripcion');        
                $operacion = $this->input->post('operacion');                            
                $total = $this->input->post('total');
                $fecha = $this->input->post('fecha');
                $usuario = $this->input->post('usuario');
                $Ingresar_caja = $this->Caja->Ingresar_caja( $descripcion, $operacion, $total, $fecha, $usuario );
                redirect('index.php/ingresarCaja/Index');
        }


}

?>


               