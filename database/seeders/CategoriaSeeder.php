<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre ="Cadenas";
        $categoria->slug ="Cadenas";
        $categoria->descripcion ="Todo tipo de cadenas";
        $categoria->save();

        $categoria1 = new Categoria();
        $categoria1->nombre ="Pulceras";
        $categoria1->slug ="Pulceras";
        $categoria1->descripcion ="Todo tipo de Pulceras";
        $categoria1->save();

        $categoria2 = new Categoria();
        $categoria2->nombre ="Aretes";
        $categoria2->slug ="Aretes";
        $categoria2->descripcion ="Todo tipo de Aretes";
        $categoria2->save();
        $categoria3 = new Categoria();
        $categoria3->nombre ="Tobilleras";
        $categoria3->slug ="Tobilleras";
        $categoria3->descripcion ="Todo tipo de Tobilleras";
        $categoria3->save();
        $categoria4 = new Categoria();
        $categoria4->nombre ="Choker";
        $categoria4->slug ="Choker";
        $categoria4->descripcion ="Todo tipo de Choker";
        $categoria4->save();
        $categoria5 = new Categoria();
        $categoria5->nombre ="Topos";
        $categoria5->slug ="Topos";
        $categoria5->descripcion ="Todo tipo de Topos";
        $categoria5->save();
        $categoria6 = new Categoria();
        $categoria6->nombre ="Straps";
        $categoria6->slug ="Straps";
        $categoria6->descripcion ="Todo tipo de Straps";
        $categoria6->save();
        $categoria7 = new Categoria();
        $categoria7->nombre ="Sets";
        $categoria7->slug ="Sets";
        $categoria7->descripcion ="Todo tipo de sets de accesorios combinados";
        $categoria7->save();
        $categoria8 = new Categoria();
        $categoria8->nombre ="Personalizados";
        $categoria8->slug ="Personalizados";
        $categoria8->descripcion ="Todo tipo de accesorios personalizados";
        $categoria8->save();
        $categoria9 = new Categoria();
        $categoria9->nombre ="Hair clips";
        $categoria9->slug ="Hair-clips";
        $categoria9->descripcion ="Todo tipo de Hair clips";
        $categoria9->save();
        $categoria10 = new Categoria();
        $categoria10->nombre ="Accesorios";
        $categoria10->slug ="Accesorios";
        $categoria10->descripcion ="Todo tipo de accesorios";
        $categoria10->save();
     
    }
}
