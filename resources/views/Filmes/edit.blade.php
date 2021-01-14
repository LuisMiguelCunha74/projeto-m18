<form action="{{route('filmes.update', ['num'=>$Filmes->id_filme])}}" method="post">
@csrf
@method('patch')
titulo: <input type="text" name="titulo" value="{{$Filmes->titulo}}"><br>
id_genero: <input type="text" name="id_genero" value="{{$Filmes->id_genero}}"><br>
sinopse: <input type="text" name="sinopse" value="{{$Filmes->sinopse}}"><br>
quantidade: <input type="text" name="quantidade" value="{{$Filmes->quantidade}}"><br>
idioma: <input type="text" name="idioma" value="{{$Filmes->idioma}}"><br>
id_ator: <input type="text" name="id_ator" value="{{$Filmes->id_ator}}"><br>
<input type="submit" value="enviar">
</form>