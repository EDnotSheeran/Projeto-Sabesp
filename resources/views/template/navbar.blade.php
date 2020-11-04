<header id="navbar">
    <nav>
        <div id="logo">
            <img src="img/water-drop.png" alt="">
            <p>Nome</p>
        </div>

        <button id="btn-mobile">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>  
        </button>
        
        <ul class="nav-list" class="mobile-hidden">
            <li class="nav-item">
                <a class="nav-link" id="home" href="{{ route('home') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="about" href="{{ route('about') }}">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-orange" id="report" href="{{ route('report') }}">Relatar</a>
            </li>
        </ul>
    </nav>
</header>