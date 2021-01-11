<h1>Atores:</h1>
@foreach($Atores as $Ator)
<h3>  <a href="{{route('Atores.show', ['num'=>$Ator->id_ator])}}">
{{$Ator->nome}}<br>
    </a>
</h3>
<button>
<a href="{{route('atores.delete',['num'=>$Ator->id_ator])}}">Eliminar</a>
</button>
<button>
<a href="{{route('atores.edit',['num'=>$Ator->id_ator])}}">editar</a>
</button>
@endforeach
<br>
<button>
    <a href="{{route('atores.create',['num'=>$Ator->id_ator])}}">criar</a>
</button>

