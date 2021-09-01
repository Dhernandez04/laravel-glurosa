<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'slug',
        'imagen',
        'descripcion',
        'precio_compra',
        'precio_venta',
        'stock',
        'existencias',
        'ventas',
        'visitas',
        'material',
        'estado',
        'activo',
        'slider',
        'id_categoria',
        'id_usuario',
       
    ];

    
    // relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function actualizarStock($id_producto,$cantidad){
        $this->where('id',$id_producto)->update(['existencias'=>$cantidad]);
    }
}
