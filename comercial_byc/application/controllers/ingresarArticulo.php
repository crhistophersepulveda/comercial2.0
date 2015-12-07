<?php

class ingresarArticulo extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
        $this->load->model('Articulos');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("Articulo/ingresoArticulo");
	}
	// controlador de insercion
	public function ingresararticulo(){

        $idProducto = $this->input->post('idProducto');
        $descripcion = $this->input->post('descripcion');        
        $uvicacion = $this->input->post('uvicacion');                            
        $stock = $this->input->post('stock');
        $stock_minimo = $this->input->post('stock_minimo');
        $fecha_compra = $this->input->post('fecha_compra');
        $costo = $this->input->post('costo');
        $ferretera = $this->input->post('ferretera');
        $especialista = $this->input->post('especialista');        
        $constructora = $this->input->post('constructora');
        $aux =  $this->input->post('proveedor_rut'); 
        $pos = strpos($aux, ' ');    
                              
        $Proveedor_rut = substr($aux,'0', $pos);
        $Marca_Marca = $this->input->post('marca');
        $Rubro_Rubro = $this->input->post('rubro');
        $Unidad_Unidad =$this->input->post('unidad');
    
        //ahora procesamos los datos hacía el modelo que debemos crear
        $Ingresar_articulo = $this->Articulos->Ingresar_articulo($idProducto, $descripcion, $uvicacion, $stock, $stock_minimo, $fecha_compra, $costo, $ferretera, $especialista, $constructora,$Proveedor_rut,$Marca_Marca, $Rubro_Rubro, $Unidad_Unidad );
        redirect('index.php/ingresarArticulo/Index');
     
	}
}
?>


               