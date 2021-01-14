<form action="{{route('generos.store')}}" method="post">
@csrf
designacao: <input type="text" name="designacao"><br>
observacoes: <input type="text" name="observacoes"><br>
<input type="submit" value="enviar">
</form>