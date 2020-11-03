<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nome - Novo Relato</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/relatar.css">
</head>
<body id="Relatar">
    <header>
        <nav>
            <div id="logo">
                <img src="img/water-drop.png" alt="">
                <p>Nome</p>
            </div>
            <button id="btn-nav" onclick="toogleHidden('#navbar')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>  
            </button>
            <ul id="navbar" class="mobile-hidden">
                <li><a id="inicio" href="/">Inicio</a></li>
                <li><a id="sobre" href="">Sobre</a></li>
            <li><a class="btn-orange" id="btn-relatar" href="{{ route('relatos.new') }}">Relatar</a></li>
                {{-- <li><a class="btn-dk-blue" id="btn-login" href="">Login</a></li> --}}
            </ul>
        </nav>
    </header>
    <main>
        <div class="form-wrapper">
            <h1 class="form-title">Reportar falta de água</h1>
            <form action="{{ url('relatos') }}" method="POST">

                @csrf

                <div class="input-block">
                    <label for="nome">Nome completo:</label>
                    <input id="nome" name="nome" type="text" placeholder="nome">
                </div>

                <div class="input-block">
                    <label for="telefone">Telefone:</label>
                    <input id="telefone" name="telefone" type="tel" placeholder="telefone">
                </div>

                <div class="input-block">
                    <label for="endereco">Endereço:</label>
                    <input id="endereco" name="endereco" type="text" placeholder="endereco">
                </div>

                <div class="input-block">
                    <label for="descricao">Descrição do problema:</label>
                    <textarea id="descricao" name="descricao" placeholder="Descrição" rows="8"></textarea>
                </div>
                <button id="confirmar" type="submit">Confirmar</button>
            </form>
        </div>
    </main>
</body>
</html>