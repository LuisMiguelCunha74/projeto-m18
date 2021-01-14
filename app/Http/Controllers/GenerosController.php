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
        $Generos = $request->num;
        $Generos = Generos::where('id_genero', $Generos)->first();
        return view('Generos.show',[
            'Generos'=>$Generos
        ]);
    }
    public function create(Request $request){
        return view ('Generos.create');
    }
    public function store(Request $request){
        $novoGenero = $request->validate([
           'id_genero'=>['nullable', 'numeric'],
           'designacao'=>['required', 'min:3', 'max:100'],
           'observacao'=>['nullable', 'min:1', 'max:255']
        ]);
        $genero = Generos::create($novoGenero);
        return redirect()->route('Generos.show', [
           'num'=>$genero->id_genero 
        ] );
    }
    public function edit(Request $request){
        $idGeneros = $request->num;
        //dd($idAtores);
        $generos = Generos::where('id_genero', $idGeneros)->first();
        //dd($atores);
        return view('generos.edit', [
            'Generos'=>$generos
        ]);
    }
    
    public function update(Request $request){
        $idGeneros = $request->num;
        $generos = Generos::findOrFail($idGeneros);
        $atualizarGenero = $request->validate ([
           'id_genero'=>['nullable', 'numeric'],
           'designacao'=>['required', 'min:3', 'max:100'],
           'observacao'=>['nullable', 'min:1', 'max:255']
        ]);
        $generos->update($atualizarGenero);
        return redirect()->route('Generos.show', [
            'num'=>$generos->id_genero
        ]);
    }
  
    public function delete(Request $request){
        $id_genero = $request->num;
        $generos = Generos::where('id_genero', $id_genero)->first();
        return view('generos.delete',[
            'generos'=>$generos
        ]);
    }
    
    public function destroy(Request $request){
        $id_genero = $request->num;
        $generos = Generos::findOrFail($id_genero);
        //dd($atores);
        $generos->delete();
        return redirect()->route('Generos.index')->with('mensagem', 'Livro eliminado!');
    }
}
