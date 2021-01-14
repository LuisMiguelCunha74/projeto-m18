<h1>Filmes:</h1>
@foreach($Filmes as $Filme)
<h3> <a href="{{route('Filmes.show', ['num'=>$Filme->id_filme])}}">
{{$Filme->titulo}}<br>
</a> </h3>
<button>
<a href="{{route('filmes.delete',['num'=>$Filme->id_filme])}}">Eliminar</a>
</button>
<button>
<a href="{{route('filmes.edit',['num'=>$Filme->id_filme])}}">editar</a>
</button>
@endforeach
<br>
<button>
    <a href="{{route('filmes.create',['num'=>$Filme->id_filme])}}">criar</a>
</button>
