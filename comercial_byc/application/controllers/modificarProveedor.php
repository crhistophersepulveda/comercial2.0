<?php

class modificarProveedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Proveedor');

	}

                // control de direccionamiento
        public function Index (){
                $lista_proveedor = $this->modelo_model->mostrar_proveedor();
                $datos['modificarproveedor'] = $lista_proveedor;
                $this->load->view("Proveedor/modificarProveedor",$datos);
        }

	// controlador de insercion
	public function modificarproveedor(){
		
		$rut = $this->input->post('rut');
                $razon_social = $this->input->post('razon_social');        
                $contacto = $this->input->post('contacto');                            
                
                $direccion = $this->input->post('direccion');                            
                $celular = $this->input->post('celular');
                $correo = $this->input->post('correo');
                $web = $this->input->post('web');
                $descuento_asig = $this->input->post('descuento_asig');
                //ahora procesamos los datos hacía el modelo que debemos crear
                $modificar_vendedor = $this->Proveedor->Modificar_Proveedor($rut, $razon_social,$contacto, $direccion, $celular, $correo, $web, $descuento_asig);
                redirect('index.php/modificarProveedor');;
        
	}

}
?>