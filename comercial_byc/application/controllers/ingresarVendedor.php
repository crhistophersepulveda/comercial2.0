<?php

class ingresarVendedor extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
                $this->load->model('Vendedor');
                $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("vendedor/ingresoVendedor");
	}
	// controlador de insercion
	public function ingresarvendedor(){
		
        if($this->input->post('submit')){ 

            //hacemos las comprobaciones que deseemos en nuestro formulario
            $this->form_validation->set_rules('rut','rut','trim|required|callback_rut_chequeo');
                        

            if (!$this->form_validation->run())
                {
                    //si no pasamos la validación volvemos al formulario mostrando los errores
                    $this->index();
                }
                //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else {
                $rut = $this->input->post('rut');
                $nombre = $this->input->post('nombre');        
                $direccion= $this->input->post('direccion');                            
                $celular = $this->input->post('celular');
                $correo = $this->input->post('correo');
                $sueldo_base = $this->input->post('sueldo');
                $comision = $this->input->post('comisión');
                
                //ahora procesamos los datos hacía el modelo que debemos crear
                $Ingresar_vendedor = $this->Vendedor->Ingresar_vendedor($rut, $nombre, $direccion, $celular, $correo, $comision, $sueldo_base);
                redirect('index.php/ingresarVendedor/Index');
            }
        } 
	}

    function rut_chequeo($rut){
        if(!strpos($rut, "-")){
            $this->form_validation->set_message('rut_chequeo', '  <div class="alert alert-danger" style="display: block;" > ERROR!! El rut se debe ingresar de la siguiente manera 11222333-4 </div>');
            return FALSE;
            }

            list($r, $dv) = explode('-', $rut,2);   
            $s=1;for($m=0;$r!=0;$r/=10)$s=($s+$r%10*(9-$m++%6))%11;
            $dv_calc = chr($s?$s+47:75);
            log_message('debug','::rut_check:'.$dv_calc.'='.$dv);

            if ($dv_calc!=$dv){
                $this->form_validation->set_message('rut_chequeo', ' <div class="alert alert-danger" style="display: block;" > El rut es invalido </div>');
                return FALSE;
            }

            else{
                return TRUE;
            }
        }
    }
?>