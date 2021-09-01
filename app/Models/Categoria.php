<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'estado'
    ];
    //relacion uno a mucho

    public function productos(){
        return $this->hasMany(Producto::class,'id');
    }
}