<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atores;

class AtoresController extends Controller
{
    //
    
    public function index(){
        $Atores = Atores :: all();
        return view ('Atores.index', [
            'Atores'=>$Atores
        ]);
    }
    
    public function show(request $request){
        $Atores = $request->num;
        $Atores = Atores::where('id_Ator', $Atores)->with('movie')->first();
        return view ('Atores.show', [
            'Atores'=>$Atores
        ]);
    }
}
