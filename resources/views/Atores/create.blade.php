<form action="{{route('atores.store')}}" method="post">
@csrf
nome: <input type="text" name="nome"><br>
nacionalidade: <input type="text" name="nacionalidade"><br>
data_nascimento: <input type="date" name="data_nascimento"><br>
fotografia: <input type="text" name="fotografia"><br>
<input type="submit" value="enviar">
</form>