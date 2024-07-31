<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
  public function saveImage(Request $request){
    $persona = new Imagen();
    $persona->nombre = $request->nombre;

    $image = $request()->file('image');
    $file=time().$image->getClientOriginalName();
    Storage::disk('imagen')->put($file, file_get_contents($image));

    $persona->nombre=$request->$file;
    $persona->save();

    return response()->json(['message' => 'Imagen guardada', 'file' => $file], 200);
  }
}
