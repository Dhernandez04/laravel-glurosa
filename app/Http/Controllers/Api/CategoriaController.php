<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['index']]);

    }
    public function index(Request $request)
    {
        $page = $request->get('page');
        if($page !== null){
        $categorias = Categoria::where('estado', true) ->orderBy('id', 'desc')->paginate(5);
              return  [
            'pagination' => [
                'total'         => $categorias->total(),
                'current_page'  => $categorias->currentPage(),
                'per_page'      => $categorias->perPage(),
                'last_page'     => $categorias->lastPage(),
                'from'          => $categorias->firstItem(),
                'to'            => $categorias->lastPage(),
            ],
            'categorias' => $categorias
        ];
    }else{
        $categorias = Categoria::with('productos')->where('estado', true)->orderBy('id', 'desc')->get();
        return  [
            'categorias' => $categorias
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
        $this->authorize('create', Categoria::class);
        $request->validate([
            'nombre'=>'required',
            'slug'=>'required|unique:categorias',
            'descripcion|max:100'
        ]);

        $categoria = Categoria::create($request->all());
        return \response($categoria);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    $categoria = Categoria::where('slug',$slug)->firstOrFail();
    return \response($categoria);
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
        $this->authorize('update', Categoria::class);
        $categoria = Categoria::findOrFail($id)->update($request->all());
        return \response($content="Categoria actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete', Categoria::class);
        $categoria = Categoria::findOrFail($id)->update(['estado' => false]);
        return \response($content="La categoria con id $id ha sido eliminada");
    }
    public function reingresar($id)
    {
        $categoria = Categoria::findOrFail($id)->update(['estado' => true]);
        return \response($content="La categoria con id $id ha sido reingresada");
    }

    
 
}
