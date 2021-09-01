<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporalCompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'folio',
        'id_producto',
        'nombre',
        'cantidad',
        'precio',
        'subtotal'
       
    ];

    public function porIdProductoCompra($id_producto){
        $this->select('*');
        $datos = $this->where('id_producto',$id_producto)->first();
        
        return $datos;
    }
    public function porCompra($folio){
        $this->select('*');
        $this->where('folio',$folio);
        $datos=$this->get();
        return $datos;
    }
    public function actualizarProductoCompra($id_producto,$folio,$cantidad,$subtotal){
    
        $this->where('id_producto',$id_producto);
        $this->where('folio',$folio);
       $this->update(['cantidad'=>$cantidad, 'subtotal'=>$subtotal]);
        
    }
    public function eliminarProductoCompra($id_producto,$folio){
    
        $this->where('id_producto',$id_producto);
        $this->where('folio',$folio);
        $this->delete();
    }
    public function eliminarCompra($folio){
        $this->where('folio',$folio)->delete();
    }
}
