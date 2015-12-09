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


        if($this->input->post('submit')){ 

            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('idProducto','idProducto','trim|required|callback_idProducto_chequeo');
                        

            if (!$this->form_validation->run())
                {
                    //si no pasamos la validación volvemos al formulario mostrando los errores
                    $this->index();
                }
                //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else {

                $idProducto = $this->input->post('idProducto');
                $descripcion = $this->input->post('descripcion');        
                $ubicacion = $this->input->post('ubicacion');                            
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
                $Ingresar_articulo = $this->Articulos->Ingresar_articulo($idProducto, $descripcion, $ubicacion, $stock, $stock_minimo, $fecha_compra, $costo, $ferretera, $especialista, $constructora,$Proveedor_rut,$Marca_Marca, $Rubro_Rubro, $Unidad_Unidad );
                redirect('index.php/ingresarArticulo/Index');
                }
     
	}
}
}

?>


               