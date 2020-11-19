<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

class GenerosController extends Controller
{
    //
    
    public function index(){
        $Generos = Generos::all();
        return view('Generos.index',[
            'Generos'=>$Generos
        ]);
    }

    public function show(request $request){
        $Generos = $request->numero;
        $Generos = Generos::where('id_genero', $Generos)->first();
        return view('Generos.show',[
            'Generos'=>$Generos
        ]);
    }
}
