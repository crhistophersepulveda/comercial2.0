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
                //ahora procesamos los datos hacía el modelo que debemos crear
                $modificar_articulo = $this->Articulos->Modificar_articulo($idProducto, $descripcion);
                redirect('index.php/modificar/modificararticulo');
        
	}
}

