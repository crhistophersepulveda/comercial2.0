<?php 
class Caja extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_caja( $descripcion, $operacion, $total, $fecha, $usuario ){
        $data = array(

            'descripcion' => $descripcion,
            'operacion' => $operacion,
            'total' => $total,
            'fecha' => $fecha,
            'usuario' => $usuario,
            'campo2' => " X ",
            'campo3' => " X ",
            'campo4' => " X "
            
        );
        $this->db->insert('Caja_chica',$data);
    }

}
 
/*fin del archivo comentarios model*/