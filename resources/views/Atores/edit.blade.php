<form action="{{route('atores.update', ['num'=>$Atores->id_Atores])}}" method="post">
@csrf
@method('patch')
nome: <input type="text" name="nome" value="{{$Atores->nome}}"><br>
nacionalidade: <input type="text" name="nacionalidade" value="{{$Atores->nacionalidade}}"><br>
data_nascimento: <input type="date" name="data_nascimento" value="{{$Atores->data_nascimento}}"><br>
fotografia: <input type="text" name="fotografia" value="{{$Atores->fotografia}}"><br>
<input type="submit" value="enviar">
</form>