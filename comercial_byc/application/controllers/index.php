<?php

class index extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
	}
	public function Index (){
		$this->load->view('index/index');
	}
}
?>