<form action="{{route('generos.update', ['num'=>$Generos->id_genero])}}" method="post">
@csrf
@method('patch')
designacao: <input type="text" name="designacao" value="{{$Generos->designacao}}"><br>
observacoes: <input type="text" name="observacoes" value="{{$Generos->observacoes}}"><br>
<input type="submit" value="enviar">
</form>