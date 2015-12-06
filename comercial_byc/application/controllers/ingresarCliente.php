<?php

class ingresarCliente extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('modelo_model');
		$this->load->model('Clientes');
        $this->load->model('Proveedor');
        $this->load->library(array('form_validation'));

	}
        // control de direccionamiento
	public function Index (){
		$this->load->view("Cliente/ingresoCliente");
	}
	// controlador de insercion
	public function ingresarcliente(){
		
	 if($this->input->post('submit')){ 

        //hacemos las comprobaciones que deseemos en nuestro formulario
        $this->form_validation->set_rules('rut','rut','trim|required|callback_rut_chequeo');
                        

        if (!$this->form_validation->run())
            {
                //si no pasamos la validación volvemos al formulario mostrando los errores
                $this->index();
            }
                     //si pasamos la validación correctamente pasamos a hacer la inserción en la base de datos
            else 
            {   
                
                $rut = $this->input->post('rut');
                $nombre = $this->input->post('nombre');        
                $direccion = $this->input->post('direccion');                            
                $contacto = $this->input->post('contacto');
                $comuna = $this->input->post('comuna');
                $ciudad = $this->input->post('ciudad');
                $rubro = $this->input->post('rubro');
                $correo = $this->input->post('correo');
                $telefono = $this->input->post('telefono');        
                $celular = $this->input->post('celular');                            
                $web = $this->input->post('web');
                $condicion_pago = $this->input->post('condicion_pago');
                $giro = $this->input->post('giro');
                $aux =  $this->input->post('vendedor');
                $pos = strpos($aux, ' ');
                $vendedor_rut= substr($aux,'0', $pos);
                $lista_precios_lista_precio = $this->input->post('lista_precio');       
                //ahora procesamos los datos hacía el modelo que debemos crear
                $Ingresar_cliente = $this->Clientes->Ingresar_cliente($rut, $nombre, $direccion, $contacto, //llamar a la funcion del modelo
                $comuna, $ciudad, $rubro, $correo, $telefono, $celular,$web,$condicion_pago, $giro,  $vendedor_rut, 
                $lista_precios_lista_precio );
                redirect('index.php/ingresarCliente/Index');;
            }
        }    
	}

    function rut_chequeo($rut){
        if(!strpos($rut, "-")){
            $this->form_validation->set_message('rut_chequeo', '  <div class="alert alert-danger" style="display: block;" > ERROR!! El rut debe ingresarse de la siguiente manera 11222333-4 </div>');
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


               