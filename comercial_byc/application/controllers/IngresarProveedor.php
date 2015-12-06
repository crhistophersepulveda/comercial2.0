<?php

class ingresarProveedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Proveedor');
	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("Proveedor/ingresoProveedor");
	}
	// controlador de insercion
	public function ingresarproveedor(){
		
                $rut =  $this->input->post('rut');
                $contacto = $this->input->post('contacto');        
                $direccion= $this->input->post('direccion');                            
                $comuna = $this->input->post('comuna');
                $ciudad = $this->input->post('ciudad');
                $telefono = $this->input->post('telefono');
                $celular = $this->input->post('celular');
                $web = $this->input->post('web');
                $correo = $this->input->post('correo');
                $razon_social = $this->input->post('razon_social');        
                $descuento= $this->input->post('descuento');                            

                //ahora procesamos los datos hacía el modelo que debemos crear
                $Ingresar_Proveedor = $this->Proveedor->Ingresar_proveedor($rut, $contacto, $direccion, $comuna, $ciudad, $telefono, $celular, $correo, $web,$razon_social,$descuento);
                redirect('index.php/ingresarProveedor/Index');

        
	}

}
?>