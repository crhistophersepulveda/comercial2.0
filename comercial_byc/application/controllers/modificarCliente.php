<?php

class modificarCliente extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Clientes');

	}

                // control de direccionamiento
        public function Index (){
                $lista_cliente = $this->modelo_model->mostrar_cliente();
                $datos['modificarcliente'] = $lista_cliente;
                $this->load->view("Cliente/modificarCliente",$datos);
        }

	// controlador de insercion
	public function modificarcliente(){
		
		$rut = $this->input->post('rut');
                $nombre_razon = $this->input->post('nombre_razon');                           
                $direccion = $this->input->post('direccion');         
                $contacto = $this->input->post('contacto');                            
                $celular = $this->input->post('celular');
                $correo = $this->input->post('correo');
                $lista_precios_lista_precio = $this->input->post('lista_precios_lista_precio');
                $aux =  $this->input->post('vendedor');
                $pos = strpos($aux, ' ');
                $vendedor_rut= substr($aux,'0', $pos);
                //ahora procesamos los datos hacía el modelo que debemos crear
                $modificar_cliente = $this->Clientes->Modificar_Cliente($rut, $nombre_razon, $direccion, $contacto,$celular, $correo, $lista_precios_lista_precio, $vendedor_rut);
                redirect('index.php/modificar/modificarcliente');;
        
	}

}
?>