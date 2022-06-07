<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <a href="{{ url('/') }}"><label class="logo">ECOIN</label>
    <ul>
        @if (Route::has('login'))
            @auth

            <li><a href="{{ route('cart.index') }}">Carrinho</a></li>
                <div class="dropdown">
                    <li><a class="active">Oi, {{ Auth::user()->name }}</a></li>
                    <div class="dropdown-content">
                        <p><a href="{{ route('perfil.index') }}" class="">Meu Perfil</a></p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
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
