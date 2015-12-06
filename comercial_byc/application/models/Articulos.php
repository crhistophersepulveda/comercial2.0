<?php 
class Articulos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_articulo($idProducto, $descripcion, $uvicacion, $stock, $stock_minimo, $fecha_compra, $costo, $ferretera, $especialista, $constructora,$Proveedor_rut,$Marca_Marca, $Rubro_Rubro, $Unidad_Unidad ){
        $data = array(

            'idProducto' => $idProducto,
            'descripcion' => $descripcion,
            'uvicacion' => $uvicacion,
            'stock' => $stock,
            'stock_minimo' => $stock_minimo,
            'fecha_compra' => $fecha_compra,
            'costo' => $costo,
            'ferretera' => $ferretera,
            'especialista' => $especialista,
            'constructora' => $constructora,
            'campo1' => " X ",
            'campo2' => " X ",
            'campo3' => " X ",
            'campo4' => " X ",
            'Proveedor_rut' => $Proveedor_rut,
            'Marca_Marca' => $Marca_Marca,
            'Rubro_Rubro' => $Rubro_Rubro,
            'Unidad_Unidad' => $Unidad_Unidad,
        );
        $this->db->insert('Producto',$data);
    }


}
 
/*fin del archivo comentarios model*/