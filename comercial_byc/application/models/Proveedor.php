<?php 
class Proveedor extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcion de insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_proveedor($rut, $contacto, $direccion, $comuna, $ciudad, $telefono, $celular, $correo, $web,$razon_social,$descuento){
        $data = array(
            'rut' => $rut,
            'contacto' => $contacto,
            'direccion' => $direccion,
            'comuna' => $comuna,
            'ciudad' => $ciudad,
            'telefono' => $telefono,
            'celular' => $celular,
            'correo' => $correo,
            'web' => $web,
            'razon_social' => $razon_social,
            'descuento_asig' => $descuento,
            'campo3' => " X ",
            'campo4' => " X ",
        );
        $this->db->insert('Proveedor',$data);
    }
    function Modificar_Proveedor($rut, $razon_social, $contacto, $direccion, $celular, $correo, $web, $descuento_asig){
        $data = array(
            
            'rut' => $rut,
            'razon_social' => $razon_social,
            'contacto' => $contacto,
            'direccion' => $direccion,
            'celular' => $celular,
            'correo' => $correo,
            'web' => $web,
            'descuento_asig' => $descuento_asig,
            'campo3' => " X ",
            'campo4' => " X "
        );
        $query = $this->db->where('rut', $rut);
        $query = $this->db->update('Proveedor', $data);
    }

}
 