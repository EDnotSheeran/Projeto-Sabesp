@extends('template.template')
@extends('template.navbar')

@section('body')
<body id="Report">
    @section('navbar')
    @endsection
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
                    <input id="endereco" name="endereco" type="text" placeholder="endereço">
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
@endsection