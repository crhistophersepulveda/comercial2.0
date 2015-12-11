<?php 
class Facturas extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // funcionde insercion los nombres es comillas simples son los de la base de datos 

    function Ingresar_factura($n_factura, $fecha_venta, $condicion_pago, $Cliente_rut, $Vendedor_rut, $neto, $iva, $descuento,$total,$estado, $fecha_pago){
        $data = array(

            'n_factura' => $n_factura,
            'fecha_venta' => $fecha_venta,
            'condicion_pago' => $condicion_pago,
            'Cliente_rut' => $Cliente_rut,
            'Vendedor_rut' => $Vendedor_rut,
            'neto' => $neto,
            'iva' => $iva,
            'descuento' => $descuento,
            'total'=>$total,
            'estado' => $estado,
            'fecha_pago' => $fecha_pago,
            'campo3' => " X ",
            'campo4' => " X "
        );
        $this->db->insert('Factura_venta',$data);
    }

    function Ingresar_Factura_compra_Producto($n_factura, $idProducto, $cantidad){
        $data = array(

            'Factura_compra_n_factura' => $n_factura,
            'Producto_idProducto' => $idProducto,
            'cantidad' => $cantidad,
        );
        $this->db->insert('Factura_compra_Producto',$data);
    }


    
}
 
/*fin del archivo comentarios model*/