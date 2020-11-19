@if(isset($Atores->id_ator))
<h1>Ator :</h1>
{{$Atores->nome}}<br>
{{$Atores->nacionalidade}}<br>
{{$Atores->data_nascimento}}<br>

<img src="{{asset('imagens/atores .fotografia')}}">
<ul>
@foreach($Atores->movie as $movie)
    <li>{{$movie->titulo}}</li>
@endforeach
</ul>
@endif
