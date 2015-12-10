<?php

class modificarArticulo extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
		$this->load->model('Articulos');
	}

public function Index (){
		
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['modificar'] = $lista_articulo;
		$this->load->view("Articulo/modificarArticulo",$datos);
	}
	public function modificararticulo(){
		
	       $idProducto = $this->input->post('idProducto');
                $descripcion = $this->input->post('descripcion');
                $ubicacion = $this->input->post('ubicacion');
                $stock = $this->input->post('stock');
                $stock_minimo = $this->input->post('stock_minimo');
                $costo = $this->input->post('costo');
                $ferretera = $this->input->post('ferretera');
                $especialista = $this->input->post('especialista');
                $constructora = $this->input->post('constructora');
                $aux =  $this->input->post('proveedor');
                $pos = strpos($aux, ' ');
                $proveedor_rut= substr($aux,'0', $pos);
                $marca = $this->input->post('marca');
                $rubro = $this->input->post('rubro');
                $unidad = $this->input->post('unidad');
                $modificar_articulo = $this->Articulos->Modificar_articulo($idProducto, $descripcion, $ubicacion, $stock, $stock_minimo, $costo, $ferretera, $especialista, $constructora, $proveedor_rut, $marca, $rubro, $unidad);
                redirect('index.php/modificar/modificararticulo');
        
	}
}

