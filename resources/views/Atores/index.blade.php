<h1>Atores:</h1>
@foreach($Atores as $Ator)
<h3>  <a href="{{route('Atores.show', ['num'=>$Ator->id_ator])}}">
{{$Ator->nome}}<br>
    </a>
</h3>
@endforeach
