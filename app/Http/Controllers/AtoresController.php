<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atores;

class AtoresController extends Controller
{
    //
    
    public function index(){
        $Atores = Atores :: all();
        //dd($Atores);
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
    
    public function create(Request $request){
        return view ('Atores.create');
    }
    
    public function store(Request $request){
        $novoAtor = $request->validate([
           'nome'=>['required', 'min:3', 'max:255'],
           'nacionalidade'=>['nullable', 'min:3', 'max:200'],
           'data_nascimento'=>['nullable', 'min:3', 'max:50'],
           'fotografia'=>['nullable', 'min:3', 'max:100']
        ]);
        $ator = Atores::create($novoAtor);
        return redirect()->route('Atores.show', [
           'num'=>$ator->id_ator 
        ] );
    }
    
    public function edit(Request $request){
        $idAtores = $request->num;
        //dd($idAtores);
        $atores = Atores::where('id_ator', $idAtores)->first();
        //dd($atores);
        return view('atores.edit', [
            'Atores'=>$atores
        ]);
    }
    
    public function update(Request $request){
        $idAtores = $request->num;
        $atores = Atores::findOrFail($idAtores);
        $atualizarAtor = $request->validate ([
            'nome'=>['required', 'min:3', 'max:255'],
            'nacionalidade'=>['nullable', 'min:3', 'max:200'],
            'data_nascimento'=>['nullable', 'min:3', 'max:50'],
            'fotografia'=>['nullable', 'min:3', 'max:100']
        ]);
        $atores->update($atualizarAtor);
        return redirect()->route('Atores.show', [
            'num'=>$atores->id_ator
        ]);
    }
  
    public function delete(Request $request){
        $id_ator = $request->num;
        $atores = Atores::where('id_ator', $id_ator)->first();
        return view('atores.delete',[
            'atores'=>$atores
        ]);
    }
    
    public function destroy(Request $request){
        $id_ator = $request->num;
        $atores = Atores::findOrFail($id_ator);
        //dd($atores);
        $atores->delete();
        return redirect()->route('Atores.index')->with('mensagem', 'Livro eliminado!');
    }
}
