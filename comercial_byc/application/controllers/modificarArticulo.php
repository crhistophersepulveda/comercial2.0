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
		
		$idProducto = $this->uri->segment(3);
		$this->modelo_model->borrar_producto($idProducto);
		redirect("index.php/modificar/modificararticulo");
	}
}

