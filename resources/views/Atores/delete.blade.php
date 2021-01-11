<h2>Deseja eliminar o Livro</h2>
<h2>{{$atores->id_ator}}</h2>
<form method="post" action="{{route('atores.destroy', ['num'=>$atores->id_ator])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
    {{session('mensagem')}}
    </div>
@endif
</form>