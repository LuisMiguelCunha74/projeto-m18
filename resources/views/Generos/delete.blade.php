<h2>Deseja eliminar o Genero</h2>
<h2>{{$generos->id_genero}}</h2>
<form method="post" action="{{route('generos.destroy', ['num'=>$generos->id_genero])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
</form>