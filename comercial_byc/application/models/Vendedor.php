<?php 
class Vendedor extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_vendedor($rut, $nombre, $direccion, $celular, $correo, $comision, $sueldo_base){
        $data = array(
            
            'rut' => $rut,
            'nombre' => $nombre,
            'direccion' => $direccion,
            'celular' => $celular,
            'correo' => $correo,
            'comision' => $comision,
            'sueldo_base' => $sueldo_base,
            'campo1' => " X ",
            'campo2' => " X ",
            'campo3' => " X ",
            'campo4' => " X "
        );
        $this->db->insert('Vendedor',$data);
    }

    function Modificar_vendedor($rut, $nombre, $direccion, $celular, $correo, $comision, $sueldo_base){
        $data = array(
            
            'rut' => $rut,
            'nombre' => $nombre,
            'direccion' => $direccion,
            'celular' => $celular,
            'correo' => $correo,
            'comision' => $comision,
            'sueldo_base' => $sueldo_base,
            'campo1' => " X ",
            'campo2' => " X ",
            'campo3' => " X ",
            'campo4' => " X "
        );
        $query = $this->db->where('rut', $rut);
        $query = $this->db->update('Vendedor', $data);
    }
}
 
/*fin del archivo comentarios model*/