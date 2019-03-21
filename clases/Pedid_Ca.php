<?php

class Pedid_Ca{
    public $Nro_Pedido;
    public $id_Cliente;
    public $Fecha_Pedido;
    public $Codigo_Vendedor;
    public $Nro_Cotizacion;
    public $Nro_Presupuesto;
    public $Id_Lista;
    public $Id_Condicion;
    public $Id_Moneda;
    public $Cotizacion_Moneda;
    public $Estado;
    public $Id_Reparto;
    public $Nro_orden_compra;
    public $Id_Tomado_Por;
    public $Id_Usuario;
    public $Fecha_Operacion;
    public $Id_Grupo_Cliente;
    public $Total_Gravado;
    public $Total_Exento;
    public $Total_Producto_Ex;
    public $Porc_Iva_Ins;
    public $Iva_Ins;
    public $Porc_Iva_NoIns;
    public $Iva_NoIns;
    public $Porc_IngBr_Cba;
    public $IngBr_Cba;
    public $Porc_IngBr_Pba;
    public $IngBr_Pba;
    public $Total_Neto;
    public $Descuento;
    public $Id_Transporte;
    public $Generado_Por;
    public $Porc_IngBr_Mis;
    public $IngBr_Mis;
    
    
    public function consultaTodosxVendedor($codVendedor)
    {
        try
        {
            $sql = "CALL Pedid_Ca_Cons_CodVend(:codVend)";
            $conexion = Conexion::conectar();
            $query = $conexion->prepare($sql);
            $query->bindParam(':codVend', $codVendedor, PDO::PARAM_INT);
            $query->execute();

            $respuesta = $query->fetchAll(PDO::FETCH_ASSOC);
            return $respuesta;
        }
        catch(PDOException $ex)
        {
            return $ex->getMessage();
        }
    }
    
    
}

