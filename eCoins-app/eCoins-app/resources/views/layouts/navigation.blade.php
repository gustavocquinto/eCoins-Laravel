<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <a href="{{ url('/') }}"><label class="logo">ECOIN</label>
    <ul>
        @if (Route::has('login'))
            @auth
            <li><a href="{{ url('#') }}">Carrinho</a></li>
                <div class="dropdown">
                    <li><a class="active" href="{{ url('#') }}">Oi, {{ Auth::user()->name }}</a></li>
                    <div class="dropdown-content">
                        <p><a href="{{ route('dashboard') }}" class="">Meu Perfil</a></p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                         <p><button type="submit" class="logout-button">Deslogar</button></p>
                        </form>
                    </div>
                  </div>
            @else
                <li><a href="{{ route('login') }}" class="">Entrar</a></li>
            @endauth
        @endif

    </ul>
</nav>
