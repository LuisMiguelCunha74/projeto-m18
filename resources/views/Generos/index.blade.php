<h1>Generos:</h1>
@foreach($Generos as $Genero)
<h3> <a href="{{route('Generos.show', ['num'=>$Genero->id_genero])}}">
{{$Genero->designacao}}<br>
</a> </h3>
<button>
<a href="{{route('generos.delete',['num'=>$Genero->id_genero])}}">Eliminar</a>
</button>
<button>
<a href="{{route('generos.edit',['num'=>$Genero->id_genero])}}">editar</a>
</button>
@endforeach 
<br>
<button>
    <a href="{{route('generos.create',['num'=>$Genero->id_genero])}}">criar</a>
</button>