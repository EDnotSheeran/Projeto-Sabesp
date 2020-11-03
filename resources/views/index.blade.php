@extends('template.template')

@section('body')
<body id="Home">
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
        <div id="carrossel">
        </div>
        <div class="conteudo-wrapper">
            <div id="conteudo">
                <div>
                    <h1>Faltou água em sua casa?</h1>
                    <div>
                        <h2>Relate o ocorrido que nós<br>informaremos a Sabesp</h2>
                        <h2>Veja quais pontos estão com<br>falta de água <a href="#">aqui</a>.</h2>
                    </div>
                </div>
                <img src="https://aguamineraltrezetilias.com.br/wp-content/uploads/2018/07/ativo-3.png" alt="">
            </div>
        </div>
    </main>
    <script>
        // Oculta e mostra os itens passados por parametro
        function toogleHidden(selector) {
            const el = document.querySelector(selector);
            el.classList.toggle('mobile-hidden');
            return 1;
        };

        // Seletor de item carrosel
        function rodaCarrossel(a){
            const numero = typeof a === 'number' ? a : a.getAttribute('numero')

            document.querySelectorAll('.carrossel-item').forEach((a, b)=>{
                a.classList.add('hidden')
                if(b == numero){
                    a.classList.remove('hidden')
                }
            })
            document.querySelectorAll('#seletor button').forEach((a, b)=>{
                a.classList.remove('active')
                if(b == numero){
                    a.classList.add('active')
                }
            })
        }
        // Chama a api e popula o carrosel com itens e com os dados obtidos
        document.getElementById('carrossel').innerHTML = '<span class="loader"></span>'
        fetch('https://sabesp-api.herokuapp.com/')
        .then(res => {
            document.getElementById('carrossel').innerText = ''
            return res.text()
        })
        .then(x => {
            const dados = JSON.parse(x)
            const carrosel = document.getElementById('carrossel')
            dados.map((x)=>{
                carrosel.appendChild(novoItemCarrosel(x))
            })
            const seletor = document.createElement('span')
            seletor.id = "seletor"
            dados.map((x,y)=>{
                const btn = document.createElement('button')
                btn.setAttribute('numero',y)
                btn.setAttribute('onclick','rodaCarrossel(this)')
                seletor.appendChild(btn)
            })
            carrosel.appendChild(seletor)
            rodaCarrossel(0)
        })
        // constroi um item do carrosel em html
        function novoItemCarrosel(dados){
            const carrosel_item = document.createElement('div')
            const reserva = document.createElement('div')
            const nome = document.createElement('p')
            const txt_volume = document.createElement('p')
            const volume = document.createElement('p')
            const txt_pluviometria = document.createElement('p')
            const ul = document.createElement('ul')
            const li_dia = document.createElement('li')
            const txt_dia = document.createElement('p')
            const dia = document.createElement('p')
            const li_mes = document.createElement('li')
            const txt_mes = document.createElement('p')
            const mes = document.createElement('p')
            const li_his = document.createElement('li')
            const txt_his = document.createElement('p')
            const his = document.createElement('p')

            txt_volume.innerText = 'Volume Armazenado'
            txt_pluviometria.innerText = 'Pluviometria'
            txt_dia.innerText = 'Dia'
            txt_mes.innerText = 'Mês'
            txt_his.innerText = 'Média Histórica'

            nome.innerText = dados.name
            volume.innerText = dados.data[0].value
            dia.innerText = dados.data[1].value
            mes.innerText = dados.data[2].value
            his.innerText = dados.data[3].value



            carrosel_item.classList.add('carrossel-item')
            carrosel_item.classList.add('hidden')
            reserva.classList.add('reserva')
            nome.classList.add('fonte-grande')
            txt_volume.classList.add('fonte-media')
            volume.classList.add('fonte-extra')
            txt_pluviometria.classList.add('fonte-media')
            txt_dia.classList.add('fonte-pequena')
            dia.classList.add('fonte-pequena')
            txt_mes.classList.add('fonte-pequena')
            mes.classList.add('fonte-pequena')
            txt_his.classList.add('fonte-pequena')
            his.classList.add('fonte-pequena')
            
            li_dia.appendChild(txt_dia)
            li_dia.appendChild(dia)
            li_mes.appendChild(txt_mes)
            li_mes.appendChild(mes)
            li_his.appendChild(txt_his)
            li_his.appendChild(his)

            ul.appendChild(li_dia)
            ul.appendChild(li_mes)
            ul.appendChild(li_his)

            reserva.appendChild(nome)
            reserva.appendChild(txt_volume)
            reserva.appendChild(volume)
            reserva.appendChild(txt_pluviometria)
            reserva.appendChild(ul)

            carrosel_item.appendChild(reserva)
            
            return carrosel_item
        }

    </script>
</body>
@endsection
