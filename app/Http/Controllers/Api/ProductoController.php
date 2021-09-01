<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
*/
   public function __construct(){
       $this->productos = new Producto();
   }
    public function index(Request $request)
    {
  
    // $productos = Producto::with('user','categoria')->where('activo', true)->orderBy('id', 'desc')->get();
    // return  [
    //  'productos' => $productos
    //  ];
    $page = $request->get('page');
    if($page){
    $productos =  Producto::with(['user','categoria'])->where('activo','=', 1)->paginate(4);
    

    return  \response()->json([
        'pagination' => [
            'total'         => $productos->total(),
            'current_page'  => $productos->currentPage(),
            'per_page'      => $productos->perPage(),
            'last_page'     => $productos->lastPage(),
            'from'          => $productos->firstItem(),
            'to'            => $productos->lastPage(),
        ],
        'productos' => $productos
    ]);
}else{
    $productos = Producto::with('categoria')->where('activo', true)->orderBy('id', 'desc')->get();
    return  [
        'productos' => $productos
    ];
}
    
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:productos',
            'precio_compra'=>'required',
            'precio_venta'=>'required',
            'stock'=>'required',
            'material'=>'required',
            'estado'=>'required',
            'activo'=>'required',
            'slider'=>'required',
            'id_categoria'=>'required',
            'id_usuario'=>'required',
            'id_categoria'=>'required',
           
        ]);

        $producto = Producto::create($request->all());
        return \response($producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    $producto = Producto::where('slug',$slug)->firstOrFail();
    return \response($producto);
    }
    public function buscarPorNombre($termino)
    {
    $producto = Producto::where('nombre','like','%'.$termino.'%')->firstOrFail();
    return \response($producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Producto = Producto::findOrFail($id)->update($request->all());
        return \response($content="Producto actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id)->update(['activo' => false]);
        return \response($content="La Producto con id $id ha sido eliminado");
    }
    public function reingresar($id)
    {
        $producto = Producto::findOrFail($id)->update(['activo' => true]);
        return \response($content="La Producto con id $id ha sido reingresado");
    }

    public function showProductos($id){
        $productos = Producto::where('id_categoria',$id)->get();

        return ["productos"=>$productos];
    }
 
}
