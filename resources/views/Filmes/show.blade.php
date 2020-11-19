@if(isset($Filmes->id_filme))
<h1>Filme :</h1>
{{$Filmes->titulo}}<br>
{{$Filmes->id_genero}}<br>
{{$Filmes->sinopse}}

<ul>
@foreach($Filmes->gen as $gen)
    <li>{{$gen->designacao}}</li>
@endforeach
</ul>

@endif
