<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //
    function store(Request $request,$tipo,$id){

      $uploadedFileUrl = Cloudinary::upload($request->file('imagen')->getRealPath())->getSecurePath();
      if($tipo==='producto'){
        Producto::findOrFail($id)->update(['imagen'=>$uploadedFileUrl]);
        return response()->json(['msg'=>"imagen actualizada con exito"]);
      }
        
    }
}
