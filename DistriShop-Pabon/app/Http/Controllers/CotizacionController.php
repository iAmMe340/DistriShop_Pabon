<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadCotizacion;

class CotizacionController extends Controller
{
    public function uploadCotizacion(Request $request)
    {
       
        if ( request()->hasFile( 'files' ) ) {
            foreach (request('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);
                $cotizacion = new uploadCotizacion();
                $cotizacion->ruta = $name;
                $cotizacion->save();

            }
        }else{
            return response()->json(['error' => 'No se ha seleccionado ningun archivo'], 400);
        }
        
        return view('cotizacion.index');
        $file = $request->file('file');
        $name = $file->getClientOriginalName();


    }
}
