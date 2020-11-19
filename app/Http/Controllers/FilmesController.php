<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filmes;

class FilmesController extends Controller
{
    //
    
    public function index(){
        $Filmes = Filmes::all();
        return view('Filmes.index', [
           'Filmes'=>$Filmes 
        ]);
         }
    public function show(request $request){
        $Filmes = $request->numero;
        $Filmes = Filmes::where('id_filme',$Filmes)->first();
        return view('Filmes.show', [
            'Filmes'=>$Filmes
        ]);
   
    }
}
