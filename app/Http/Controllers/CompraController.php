<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Producto;
use App\Models\TemporalCompra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['index']]);
        $this->compras = new Compra();
        $this->detalle_compra = new DetalleCompra();
        $this->productos = new Producto();
        $this->temporal_compra = new TemporalCompra();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_compra = $request->input('id_compra');
        $total = $request->input('total');
        $user = auth()->user();
        // $session = session();
        // $session->id_usuario;
        $resultadoId = $this->compras->insertaCompra($id_compra,$total,$user->id);

        if($resultadoId){
            $resultadocompra = $this->temporal_compra->porCompra($id_compra);
           
            foreach($resultadocompra as $row){
               
                $this->detalle_compra->create([
                    'id_compra'=>$resultadoId,
                    'id_producto'=>$row['id_producto'],
                    'nombre'=>$row['nombre'],
                    'cantidad'=>$row['cantidad'],
                    'precio'=>$row['precio'],
                    
                ]);

                $this->productos->actualizarStock($row['id_producto'],$row['cantidad']);
            }

            $this->temporal_compra->eliminarCompra($id_compra);
        }
        return [
            'ok'=>true,
            'msg'=>'compra realizada con exito'
        ];
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compra $compra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compra  $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compra $compra)
    {
        //
    }
}
