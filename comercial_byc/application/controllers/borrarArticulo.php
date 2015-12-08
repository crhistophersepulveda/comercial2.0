<?php

class borrarArticulo extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}

public function Index (){
		
		$lista_articulo = $this->modelo_model->mostrar_productos();
		$datos['modificar'] = $lista_articulo;
		$this->load->view("Articulo/modificarArticulo",$datos);
	}

	public function borrar_producto(){

		$idProducto = array('idd' => $this->input->post('valor_enviar'));
		echo "el rut es: ".$idProducto['idd'];
		$this->modelo_model->borrar_producto($idProducto);
		redirect('index.php/modificar/modificararticulo');
	}




}

