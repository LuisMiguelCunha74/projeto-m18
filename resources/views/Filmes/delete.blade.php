<h2>Deseja eliminar o filme</h2>
<h2>{{$filmes->id_filme}}</h2>
<form method="post" action="{{route('filmes.destroy', ['num'=>$filmes->id_filme])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
</form>