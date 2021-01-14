<form action="{{route('filmes.store')}}" method="post">
@csrf
titulo: <input type="text" name="titulo"><br>
id_genero: <input type="text" name="id_genero"><br>
sinopse: <input type="text" name="sinopse"><br>
quantidade: <input type="text" name="quantidade"><br>
idioma: <input type="text" name="idioma"><br>
id_ator: <input type="text" name="id_ator"><br>
<input type="submit" value="enviar">
</form>