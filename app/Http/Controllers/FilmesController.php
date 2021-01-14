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
        $Filmes = $request->num;
        $Filmes = Filmes::where('id_filme',$Filmes)->with(['gen','atore'])->first();
        
        return view('Filmes.show', [
            'Filmes'=>$Filmes
        ]);
    }
    public function create(Request $request){
        return view ('Filmes.create');
    }
    public function store(Request $request){
        $novoFilme = $request->validate([
           'titulo'=>['required', 'min:3', 'max:100'],
           'id_genero'=>['nullable', 'numeric'],
           'sinopse'=>['nullable', 'min:1', 'max:255'],
           'quantidade'=>['required', 'min:1', 'max:100'],
           'idioma'=>['required', 'min:3', 'max:10'],
           'id_ator'=>['required', 'numeric']
        ]);
        $filme = Filmes::create($novoFilme);
        return redirect()->route('Filmes.show', [
           'num'=>$filme->id_filme 
        ] );
    }
    public function edit(Request $request){
        $idFilmes = $request->num;
        //dd($idAtores);
        $filmes = Filmes::where('id_filme', $idFilmes)->first();
        //dd($atores);
        return view('filmes.edit', [
            'Filmes'=>$filmes
        ]);
    }
    
    public function update(Request $request){
        $idFilmes = $request->num;
        $filmes = Filmes::findOrFail($idFilmes);
        $atualizarFilme = $request->validate ([
           'titulo'=>['required', 'min:3', 'max:100'],
           'id_genero'=>['nullable', 'numeric'],
           'sinopse'=>['nullable', 'min:1', 'max:255'],
           'quantidade'=>['required', 'min:1', 'max:100'],
           'idioma'=>['required', 'min:3', 'max:10'],
           'id_ator'=>['required', 'numeric']
        ]);
        $filmes->update($atualizarFilme);
        return redirect()->route('Filmes.show', [
            'num'=>$filmes->id_filme
        ]);
    }
  
    public function delete(Request $request){
        $id_filme = $request->num;
        $filmes = Filmes::where('id_filme', $id_filme)->first();
        return view('filmes.delete',[
            'filmes'=>$filmes
        ]);
    }
    
    public function destroy(Request $request){
        $id_filme = $request->num;
        $filmes = Filmes::findOrFail($id_filme);
        //dd($atores);
        $filmes->delete();
        return redirect()->route('Filmes.index')->with('mensagem', 'Livro eliminado!');
    }
}
