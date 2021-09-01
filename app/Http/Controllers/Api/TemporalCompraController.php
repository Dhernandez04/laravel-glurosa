<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\TemporalCompra;
use Illuminate\Http\Request;

class TemporalCompraController extends Controller
{
    //

    public function __construct(){
        $this->temporalCompra = new TemporalCompra();
        $this->producto = new Producto();
        
    }

    public function insertar($id_producto, $cantidad){
         $error = '';

         $datos =[];
            $id_compra= uniqid();
        $producto = $this->producto->where('id', $id_producto)->first();
        if($producto){
            $datosExiste = $this->temporalCompra->porIdProductoCompra($id_producto);
       
        $existe = count((array)$datosExiste) > 0;
    
            if ($existe) {
               
                $cantidad = $datosExiste->cantidad + $cantidad;
                $subtotal = $cantidad * $datosExiste->precio;  
               $this->temporalCompra
               ->where('id_producto',$id_producto)
               ->where('folio',$datosExiste->folio)
               ->update(['cantidad'=>$cantidad, 'subtotal'=>$subtotal]);;
               
               
            }else{
                // echo "no existe";
                // exit;
                $subtotal = $cantidad * $producto->precio_compra;
                
                $datos = [

                    'folio' => $id_compra,
                    'id_producto' => $id_producto,
                    'nombre' => $producto->nombre,
                    'precio' => $producto->precio_compra,
                    'cantidad' => $cantidad,
                    'subtotal' => $subtotal,

                ];
               
                $this->temporalCompra->create($datos);
            }
        } else {
            $error = 'No existe el producto';
        }
        $res['datos'] = $this->temporalCompra->porCompra($id_compra);
        $res['total'] = number_format($this->totalProductos($id_compra, 2, '.', ','));
        $res['error'] = $error;
        return $res;

    }

    public function totalProductos($id_compra)
    {
        $resultados = $this->temporalCompra->porCompra($id_compra);
        $total = 0;
        foreach ($resultados as $row) {
            $total += $row['subtotal'];
        }
        return $total;
    }

}
