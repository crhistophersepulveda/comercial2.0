<?php 
class Clientes extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_cliente($rut, $nombre_razon, $direccion, $contacto, $comuna, $ciudad, $rubro, $correo, $telefono, $celular,$web,$condicion_pago, $giro,  $vendedor_rut, $lista_precios_lista_precio ){
        $data = array(
            'rut' => $rut,
            'nombre_razon' => $nombre_razon,
            'direccion' => $direccion,
            'contacto' => $contacto,
            'comuna' => $comuna,
            'ciudad' => $ciudad,
            'rubro' => $rubro,
            'correo' => $coreo,
            'telefono' => $telefono,
            'celular' => $celular,
            'web' => $web,
            'condicion_pago' => $condicion_pago,
            'giro' => $giro,
            'campo3' => " X ",
            'campo4' => " X ",
            'vendedor_rut' => $vendedor_rut,
            'lista_precios_lista_precio' => $lista_precios_lista_precio
        );
        $this->db->insert('Cliente',$data);
    }
    function Modificar_Cliente($rut, $nombre_razon, $direccion, $contacto,$celular, $correo, $lista_precios_lista_precio, $vendedor_rut){
        $data = array(
            
            'rut' => $rut,
            'nombre_razon' => $nombre_razon,
            'direccion' => $direccion,
            'contacto' => $contacto,
            'comuna' => "Comuna Talca",
            'ciudad' => "Ciudad Talca",
            'rubro' => "ALMACEN",
            'correo'=> $correo,
            'telefono'=>"prueba telefono",
            'celular'=> $celular,
            'web' => "www.web.cl",
            'condicion_pago' => "Efectivo",
            'giro' => "prueba giro",
            'campo3' => "x",
            'campo4' => "x",
            'Vendedor_rut' =>$vendedor_rut,
            'lista_precios_lista_precio' => $lista_precios_lista_precio
        );
        $query = $this->db->where('rut', $rut);
        $query = $this->db->update('Cliente', $data);
    }
    

}
 
/*fin del archivo comentarios model*/