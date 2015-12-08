<?php
if( ! defined('BASEPATH')) exit("No direct script acces allowed");

class Modelo_model extends CI_Model
{
	
	function __construct()
	{
			parent::__construct();
		//	$this->load->database();
	}



/*------------------------------------------------------------------------------------/
								PRODUCTOS
-------------------------------------------------------------------------------------*/

/*--MOSTRAR PRODUCTOS--*/

	public function mostrar_productos(){
			return $this->db->get('Producto');
	}

/*--BORRAR PRODUCTOS--*/

	public function borrar_producto($idProducto){
		$this->db->where ('idProducto',$idProducto);
		return $this->db->delete('Producto');
	}



/*------------------------------------------------------------------------------------/
								CLIENTES
-------------------------------------------------------------------------------------*/

/*--MOSTRAR CLIENTES--*/
	public function mostrar_clientes(){
		return $this->db->get('Cliente');
	}
/*--BORRAR CLIENTES--*/

	public function borrar_clientes($rut){
		$this->db->where ('rut',$rut['idd']);
		return $this->db->delete('Cliente');
	}
/*------------------------------------------------------------------------------------/
								VENDEDOR
-------------------------------------------------------------------------------------*/

/*--MOSTRAR VENDEDORES--*/
	public function mostrar_vendedores(){
		return $this->db->get('Vendedor');
	}
/*--BORRAR VENDEDOR--*/

	public function borrar_vendedor($rut){
		$this->db->where('rut',$rut['idd']);
		return $this->db->delete('Vendedor');
	}



/*------------------------------------------------------------------------------------/
								PROVEEDOR
-------------------------------------------------------------------------------------*/

/*--MOSTRAR PROVEEDORES--*/
	public function mostrar_proveedor(){
			return $this->db->get('Proveedor');
	}
	public function borrar_proveedor($rut){
		$this->db->where ('rut',$rut['idd']);
		return $this->db->delete('Proveedor');
	}


}
?>