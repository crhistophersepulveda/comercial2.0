<?php 
class Articulos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_articulo($idProducto, $descripcion, $ubicacion, $stock, $stock_minimo, $fecha_compra, $costo, $ferretera, $especialista, $constructora,$Proveedor_rut,$Marca_Marca, $Rubro_Rubro, $Unidad_Unidad ){
        $data = array(

            'idProducto' => $idProducto,
            'descripcion' => $descripcion,
            'ubicacion' => $ubicacion,
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

    function Modificar_articulo($idProducto, $descripcion, $ubicacion, $stock, $stock_minimo, $costo, $ferretera, $especialista, $constructora, $proveedor_rut, $marca, $rubro, $unidad){
        $data = array(
            'idProducto' => $idProducto,
            'descripcion' => $descripcion,
            'ubicacion' => $ubicacion,
            'stock' => $stock,
            'stock_minimo' => $stock_minimo,
            'fecha_compra' => "2015/12/08",
            'costo' => $costo,
            'ferretera' => $ferretera,
            'especialista' => $especialista,
            'constructora' => $constructora,
            'campo1' => " X ",
            'campo2' => " X ",
            'campo3' => " X ",
            'campo4' => " X ",
            'Proveedor_rut' => $proveedor_rut,
            'Marca_Marca' => $marca,
            'Rubro_Rubro' => $rubro,
            'Unidad_Unidad' => $unidad,
        );
        $query = $this->db->where('idProducto', $idProducto);
        $query = $this->db->update('Producto', $data);
    }
}
 
/*fin del archivo comentarios model*/