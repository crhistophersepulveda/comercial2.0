<?php

class modificarVendedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Vendedor');

	}

                // control de direccionamiento
        public function Index (){
                $lista_vendedor = $this->modelo_model->mostrar_vendedores();
                $datos['modificarvendedor'] = $lista_vendedor;
                $this->load->view("Vendedor/modificarVendedor",$datos);
        }

	// controlador de insercion
	public function modificarvendedor(){
		
		$rut = $this->input->post('rut');
                $nombre = $this->input->post('nombre');        
                $direccion = $this->input->post('direccion');                            
                $celular = $this->input->post('celular');
                $correo = $this->input->post('correo');
                $comision = $this->input->post('comision');
                $sueldo_base = $this->input->post('sueldo_base');
                //ahora procesamos los datos hacía el modelo que debemos crear
                $modificar_vendedor = $this->Vendedor->Modificar_vendedor($rut, $nombre, $direccion, $celular, $correo, $comision, $sueldo_base);
                redirect('index.php/modificarVendedor');;
        
	}
        

}
?>