@if(isset($Generos->id_genero))
<h1>Genero :</h1>
{{$Generos->designacao}}<br>
{{$Generos->observacoes}}

<ul>
@foreach($Generos->movie as $movie)
    <li>{{$movie->titulo}}</li>
@endforeach
</ul>
@endif