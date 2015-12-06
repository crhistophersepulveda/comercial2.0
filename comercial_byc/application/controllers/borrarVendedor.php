<?php

class borrarVendedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
		$this->load->model('Clientes');
		$this->load->library(array('form_validation'));
	}

	public function Index (){
		$lista_vendedor = $this->modelo_model->mostrar_vendedores();
        $datos['modificarvendedor'] = $lista_vendedor;
        $this->load->view("Vendedor/modificarVendedor",$datos);
	}

	/*------------------------------------------------------------------------------------/
									ARTICULOS
	-------------------------------------------------------------------------------------*/

	public function borrar_producto(){
		
		$idProducto = $this->uri->segment(3);
		$this->modelo_model->borrar_producto($idProducto);
		redirect("index.php/modificar/modificararticulo");
	}

	/*------------------------------------------------------------------------------------/
									VENDEDOR
	-------------------------------------------------------------------------------------*/

	public function borrar_vendedor(){

		if($this->input->post('valor_enviar')){ 

        //hacemos las comprobaciones que deseemos en nuestro formulario
        $this->form_validation->set_rules('valor_enviar','valor_enviar','trim|callback_Verificar_cliente');
                        


        if (!$this->form_validation->run())
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
                //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {
                $rut = array('idd' => $this->input->post('valor_enviar'));
				echo "el rut es: ".$rut['idd'];
				$this->modelo_model->borrar_vendedor($rut);
				redirect('index.php/modificar/modificarvendedor');
            }
        }
	}

	function Verificar_cliente($rut){
        
        $sql = " SELECT ve.rut from Vendedor ve , Cliente cl where cl.Vendedor_rut = ? and cl.Vendedor_rut=ve.rut ";
        $query = $this->db->query($sql,array($rut)); 

		if ($query->num_rows() == 0)
        {
         	return True;   
        }
        else
        {
        	$this->form_validation->set_message('Verificar_cliente', '  <div class="alert alert-danger" style="display: block;" > IMPOSIBLE ELIMINAR VENDEDOR CON CLIENTE ASOSIADO </div>');
            return FALSE;

        }		
    }
}