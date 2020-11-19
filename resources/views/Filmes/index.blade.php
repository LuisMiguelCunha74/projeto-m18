<h1>Filmes:</h1>
@foreach($Filmes as $Filme)
<h3> <a href="{{route('Filmes.show', ['numero'=>$Filme->id_filme])}}">
{{$Filme->titulo}}<br>
</a> </h3>
@endforeach
