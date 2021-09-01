<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->nombre ="Choker Corazones";
        $producto->slug ="choker-corazones";
        $producto->imagen ="";
        $producto->descripcion ="";
        $producto->precio_compra = 10000;
        $producto->precio_venta = 15000;
        $producto->material ="Acero inoxidable";
        $producto->stock = 5;
        $producto->estado ="Nuevo";
        $producto->activo =1;
        $producto->id_Categoria =5;
        $producto->slider = 0;
        $producto->id_usuario =1;
        $producto->save();
        $producto1 = new Producto();
        $producto1->nombre ="Choker Perlas Blancas";
        $producto1->slug ="choker-perlas-blancas";
        $producto1->imagen ="";
        $producto1->descripcion ="";
        $producto1->precio_compra = 10000;
        $producto1->precio_venta = 15000;
        $producto1->material ="Acero inoxidable";
        $producto1->stock = 5;
        $producto1->estado ="Nuevo";
        $producto1->activo =1;
        $producto1->id_Categoria =5;
        $producto1->slider = 0;
        $producto1->id_usuario =1;
        $producto1->save();
        $producto1 = new Producto();
        $producto1->nombre ="Choker Perlas Doradas";
        $producto1->slug ="choker-perlas-doradas";
        $producto1->imagen ="";
        $producto1->descripcion ="";
        $producto1->precio_compra = 10000;
        $producto1->precio_venta = 15000;
        $producto1->material ="Acero inoxidable";
        $producto1->stock = 5;
        $producto1->estado ="Nuevo";
        $producto1->activo =1;
        $producto1->id_Categoria =5;
        $producto1->slider = 0;
        $producto1->id_usuario =1;
        $producto1->save();
        $producto2 = new Producto();
        $producto2->nombre ="Hilo Invisible";
        $producto2->slug ="hilo-invisible";
        $producto2->imagen ="";
        $producto2->descripcion ="";
        $producto2->precio_compra = 8000;
        $producto2->precio_venta = 12000;
        $producto2->material ="";
        $producto2->stock = 5;
        $producto2->estado ="Nuevo";
        $producto2->activo =1;
        $producto2->id_Categoria =9;
        $producto2->slider = 0;
        $producto2->id_usuario =1;
        $producto2->save();

        $producto3 = new Producto();
        $producto3->nombre ="Atraes lo que vibras";
        $producto3->slug ="atraes-lo-que-vibras";
        $producto3->imagen ="";
        $producto3->descripcion ="";
        $producto3->precio_compra = 10000;
        $producto3->precio_venta = 15000;
        $producto3->material ="Acero inoxidable";
        $producto3->stock = 5;
        $producto3->estado ="Nuevo";
        $producto3->activo =1;
        $producto3->id_Categoria =1;
        $producto3->slider = 0;
        $producto3->id_usuario =1;
        $producto3->save();

        $producto4 = new Producto();
        $producto4->nombre ="Conchas de mar";
        $producto4->slug ="conchas-de-mar";
        $producto4->imagen ="";
        $producto4->descripcion ="";
        $producto4->precio_compra = 10000;
        $producto4->precio_venta = 15000;
        $producto4->material ="Acero inoxidable";
        $producto4->stock = 5;
        $producto4->estado ="Nuevo";
        $producto4->activo =1;
        $producto4->id_Categoria =1;
        $producto4->slider = 0;
        $producto4->id_usuario =1;
        $producto4->save();

        $producto5 = new Producto();
        $producto5->nombre ="Cadena manito ojo";
        $producto5->slug ="cadena-manito-ojo";
        $producto5->imagen ="";
        $producto5->descripcion ="";
        $producto5->precio_compra = 10000;
        $producto5->precio_venta = 15000;
        $producto5->material ="Acero inoxidable";
        $producto5->stock = 5;
        $producto5->estado ="Nuevo";
        $producto5->activo =1;
        $producto5->id_Categoria =1;
        $producto5->slider = 0;
        $producto5->id_usuario =1;
        $producto5->save();

        $producto6 = new Producto();
        $producto6->nombre ="Cadena Dios está conmigo";
        $producto6->slug ="cadena-dios-esta-conmigo";
        $producto6->imagen ="";
        $producto6->descripcion ="";
        $producto6->precio_compra = 10000;
        $producto6->precio_venta = 15000;
        $producto6->material ="Acero inoxidable";
        $producto6->stock = 5;
        $producto6->estado ="Nuevo";
        $producto6->activo =1;
        $producto6->id_Categoria =1;
        $producto6->slider = 0;
        $producto6->id_usuario =1;
        $producto6->save();

        $producto7 = new Producto();
        $producto7->nombre ="Cadena estrella";
        $producto7->slug ="cadena-estrella";
        $producto7->imagen ="";
        $producto7->descripcion ="";
        $producto7->precio_compra = 7000;
        $producto7->precio_venta = 10000;
        $producto7->material ="Acero inoxidable";
        $producto7->stock = 5;
        $producto7->estado ="Nuevo";
        $producto7->activo =1;
        $producto7->id_Categoria =1;
        $producto7->slider = 0;
        $producto7->id_usuario =1;
        $producto7->save();

        $producto8 = new Producto();
        $producto8->nombre ="Choker conchas de mar";
        $producto8->slug ="choker-conchas-de-mar";
        $producto8->imagen ="";
        $producto8->descripcion ="";
        $producto8->precio_compra = 7000;
        $producto8->precio_venta = 10000;
        $producto8->material ="Acero inoxidable";
        $producto8->stock = 5;
        $producto8->estado ="Nuevo";
        $producto8->activo =1;
        $producto8->id_Categoria =5;
        $producto8->slider = 0;
        $producto8->id_usuario =1;
        $producto8->save();

        $producto9 = new Producto();
        $producto9->nombre ="Set playero";
        $producto9->slug ="set-playero-v1";
        $producto9->imagen ="";
        $producto9->descripcion ="";
        $producto9->precio_compra = 15000;
        $producto9->precio_venta = 20000;
        $producto9->material ="";
        $producto9->stock = 5;
        $producto9->estado ="Nuevo";
        $producto9->activo =1;
        $producto9->id_Categoria =8;
        $producto9->slider = 0;
        $producto9->id_usuario =1;
        $producto9->save();

        $producto10 = new Producto();
        $producto10->nombre ="Set playero";
        $producto10->slug ="set-playero-v2";
        $producto10->imagen ="";
        $producto10->descripcion ="";
        $producto10->precio_compra = 15000;
        $producto10->precio_venta = 20000;
        $producto10->material ="";
        $producto10->stock = 5;
        $producto10->estado ="Nuevo";
        $producto10->activo =1;
        $producto10->id_Categoria =8;
        $producto10->slider = 0;
        $producto10->id_usuario =1;
        $producto10->save();

        $producto11 = new Producto();
        $producto11->nombre ="Set Soles";
        $producto11->slug ="set-soles";
        $producto11->imagen ="";
        $producto11->descripcion ="";
        $producto11->precio_compra = 15000;
        $producto11->precio_venta = 20000;
        $producto11->material ="";
        $producto11->stock = 5;
        $producto11->estado ="Nuevo";
        $producto11->activo =1;
        $producto11->id_Categoria =8;
        $producto11->slider = 0;
        $producto11->id_usuario =1;
        $producto11->save();

        $producto12 = new Producto();
        $producto12->nombre ="Set tobilleras o manillas";
        $producto12->slug ="set-tobilleras-o-manillas";
        $producto12->imagen ="";
        $producto12->descripcion ="";
        $producto12->precio_compra = 15000;
        $producto12->precio_venta = 20000;
        $producto12->material ="";
        $producto12->stock = 5;
        $producto12->estado ="Nuevo";
        $producto12->activo =1;
        $producto12->id_Categoria =8;
        $producto12->slider = 0;
        $producto12->id_usuario =1;
        $producto12->save();

        $producto13 = new Producto();
        $producto13->nombre ="Tobilleras estrellas";
        $producto13->slug ="tobilleras-estrellas";
        $producto13->imagen ="";
        $producto13->descripcion ="";
        $producto13->precio_compra = 6000;
        $producto13->precio_venta = 12000;
        $producto13->material ="";
        $producto13->stock = 5;
        $producto13->estado ="Nuevo";
        $producto13->activo =1;
        $producto13->id_Categoria =4;
        $producto13->slider = 0;
        $producto13->id_usuario =1;
        $producto13->save();

        $producto14 = new Producto();
        $producto14->nombre ="Set topitos";
        $producto14->slug ="set-topitos";
        $producto14->imagen ="";
        $producto14->descripcion ="";
        $producto14->precio_compra = 6000;
        $producto14->precio_venta = 10000;
        $producto14->material ="";
        $producto14->stock = 5;
        $producto14->estado ="Nuevo";
        $producto14->activo =1;
        $producto14->id_Categoria =8;
        $producto14->slider = 0;
        $producto14->id_usuario =1;
        $producto14->save();

        $producto15 = new Producto();
        $producto15->nombre ="Candongas";
        $producto15->slug ="candongas";
        $producto15->imagen ="";
        $producto15->descripcion ="";
        $producto15->precio_compra = 6000;
        $producto15->precio_venta = 10000;
        $producto15->material ="";
        $producto15->stock = 5;
        $producto15->estado ="Nuevo";
        $producto15->activo =1;
        $producto15->id_Categoria =3;
        $producto15->slider = 0;
        $producto15->id_usuario =1;
        $producto15->save();

        $producto16 = new Producto();
        $producto16->nombre ="Straps";
        $producto16->slug ="straps";
        $producto16->imagen ="";
        $producto16->descripcion ="Pedidos por encargo Murano y perla";
        $producto16->precio_compra = 16000;
        $producto16->precio_venta = 20000;
        $producto16->material ="";
        $producto16->stock = 5;
        $producto16->estado ="Nuevo";
        $producto16->activo =1;
        $producto16->id_Categoria =7;
        $producto16->slider = 0;
        $producto16->id_usuario =1;
        $producto16->save();

        $producto17 = new Producto();
        $producto17->nombre ="Hair clips";
        $producto17->slug ="hair-clips";
        $producto17->imagen ="";
        $producto17->descripcion ="Pedidos por encargo Murano y perla";
        $producto17->precio_compra = 10000;
        $producto17->precio_venta = 16000;
        $producto17->material ="Oro golfi";
        $producto17->stock = 5;
        $producto17->estado ="Nuevo";
        $producto17->activo =1;
        $producto17->id_Categoria =7;
        $producto17->slider = 0;
        $producto17->id_usuario =1;
        $producto17->save();

        $producto18 = new Producto();
        $producto18->nombre ="Bandanas";
        $producto18->slug ="bandanas";
        $producto18->imagen ="";
        $producto18->descripcion ="Tela de seda delicada";
        $producto18->precio_compra = 7000;
        $producto18->precio_venta = 10000;
        $producto18->material ="Oro golfi";
        $producto18->stock = 5;
        $producto18->estado ="Nuevo";
        $producto18->activo =1;
        $producto18->id_Categoria =9;
        $producto18->slider = 0;
        $producto18->id_usuario =1;
        $producto18->save();

    }
}
