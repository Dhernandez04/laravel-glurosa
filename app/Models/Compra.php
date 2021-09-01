<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    // 
    protected $fillable = [
        'folio',
        'total',
        'id_usuario',
    ];

    public function insertaCompra($id_compra,$total,$id_usuario){
      $compra = $this->create([
            'folio'=>$id_compra,
            'total'=>$total,
            'id_usuario'=> $id_usuario
      ]);
   
      return $compra->id;
    }

}
