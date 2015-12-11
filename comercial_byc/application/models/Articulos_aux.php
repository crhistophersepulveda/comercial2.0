<?php 
class Articulos_aux extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_articulo_aux($idProducto, $Nombre, $Precio, $cantidad, $Total){
       
        $query = $this->db->where("id_producto",$idProducto);
        $query = $this->db->get("Productos_aux");

        if ($query->num_rows() == 0)
        {
            $data = array(

            'id_producto' => $idProducto,
            'Nombre' => $Nombre,
            'Precio' => $Precio,
            'cantidad' => $cantidad,
            'Total' => $Total   
        );
        $this->db->insert('Productos_aux',$data);
        }

        else{

            $data = array(
            'id_producto' => $idProducto,
            'Nombre' => $Nombre,
            'Precio' => $Precio,
            'cantidad' => $cantidad,
            'Total' => $Total   
            );

            $query = $this->db->where('id_producto', $idProducto);
            $query = $this->db->update('Productos_aux', $data);
        }
    }

    public function borrar_producto_aux($idProducto){
        $this->db->where ('id_producto',$idProducto['idd']);
        return $this->db->delete('Productos_aux');
    }
}
 
/*fin del archivo comentarios model*/