<?php

class ingresarArticulo extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
        $this->load->model('Proveedor');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("Articulo/ingresoArticulo");
	}
	// controlador de insercion
	public function ingresarcliente(){
		
	 if($this->input->post('submit')){ 


        $rut = $this->input->post('rut');
        $nombre = $this->input->post('nombre');        
        $direccion = $this->input->post('direccion');                            
        $contacto = $this->input->post('contacto');
        $comuna = $this->input->post('comuna');
        $ciudad = $this->input->post('ciudad');
        $rubro = $this->input->post('rubro');
        $correo = $this->input->post('correo');
        $telefono = $this->input->post('telefono');        
        $celular = $this->input->post('celular');                            
        $web = $this->input->post('web');
        $condicion_pago = $this->input->post('condicion_pago');
        $giro = $this->input->post('giro');
        $vendedor_rut =$this->input->post('vendedor');
        $lista_precios_lista_precio = $this->input->post('lista_precio');       
        //ahora procesamos los datos hacía el modelo que debemos crear
        $Ingresar_cliente = $this->Clientes->Ingresar_cliente($rut, $nombre, $direccion, $contacto, //llamar a la funcion del modelo
        $comuna, $ciudad, $rubro, $correo, $telefono, $celular,$web,$condicion_pago, $giro,  $vendedor_rut, 
        $lista_precios_lista_precio );
        redirect('index.php/ingresarCliente/Index');;
     
	}
}
?>


               