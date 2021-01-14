<html>
<head>
<meta charset="utf-8"/>    
    <title>@yield('titulo-pagina')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.js')}}">
    <script src="{{asset('js/j1uery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
</head>
<body>
@if(session()->has('mensagem'))
    <div class="alert alert-danger" role="alert">
        {{session('mensagem')}}
    </div>
@endif
    <h1 style="color:#00ff00">
    @yield('header')
    </h1>
    @yield('conteudo')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav">
        <button>
            <a class="nav-item nav-link" href="{{route('Atores.index')}}">Atores</a>
        </button>
        <button>
            <a class="nav-item nav-link" href="{{route('Filmes.index')}}">Filmes</a>
        </button>
        <button>
            <a class="nav-item nav-link" href="{{route('Generos.index')}}">Generos</a>
        </button>
            <a class="dropdown-item" href="{{route('login')}}">Login</a>
            
            
            <a class="dropdown-item" href="{{route('Register')}}">Register</a>
            
            
            @if(auth()->check())
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{__('Logout')}}
            </a>
            <form id="logout-form" action="{{route('logout')}}" method="post" class="d-none">
                @csrf
            </form>
            @endif
        </div>
        @if(auth()->check())
            {{Auth::user()->nome}}<br>
            {{Auth::user()->email}}<br>
        @endif
    </nav>
</body>
</html>