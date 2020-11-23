@if(isset($Atores->id_ator))
<h1>Ator :</h1>
{{$Atores->nome}}<br>
{{$Atores->nacionalidade}}<br>
{{$Atores->data_nascimento}}<br>
@if($Atores->fotografia)
<img src="{{asset('imagens/'.$Atores->fotografia)}}">
@elseif($Atores->fotografia)
<img src="{{asset('imagens/'.$Atores->fotografia)}}">
@elseif($Atores->fotografia)
<img scr="{{asset('imagens/'.$Atores->fotografia)}}">
@endif
<ul>
@foreach($Atores->movie as $movie)
    <li>{{$movie->titulo}}</li>
@endforeach
</ul>
@endif
