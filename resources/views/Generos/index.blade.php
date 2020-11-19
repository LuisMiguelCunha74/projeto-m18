@foreach($Generos as $Genero)
<h3> <a href="{{route('Generos.show', ['numero'=>$Genero->id_genero])}}">
    
{{$Genero->designacao}}<br>
</a> </h3>
@endforeach