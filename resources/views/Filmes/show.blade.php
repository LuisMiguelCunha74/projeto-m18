@if(isset($Filmes->id_filme))
<h1>Filme :</h1>
{{$Filmes->titulo}}<br>
{{$Filmes->id_genero}}<br>
{{$Filmes->sinopse}}

{{$Filmes->gen->desginacao}}<br>

{{$Filmes->atore->nome}}

@endif
