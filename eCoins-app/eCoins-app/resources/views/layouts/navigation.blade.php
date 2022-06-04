<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>

    <a href="{{ url('/') }}"><label class="logo">ECOIN</label></a>
    <ul>
        @if (Route::has('login'))
            @auth
                <div class="dropdown">
                    <li><a class="active">Oi, {{ Auth::user()->name }}</a></li>
                    <div class="dropdown-content">
                        <p><a href="{{ route('dashboard') }}" class="">Meu Perfil</a></p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                         <p><button type="submit" class="logout-button">Deslogar</button></p>
                        </form>
                    </div>
                  </div>
                  <div class="dropdown">
                    @if(Auth::user()->admin == 1)
                    <li><a class="">Painel do Administrador</a></li>
                    <div class="dropdown-content">
                        <p><a href="{{ route('product.index') }}" class="">Produtos</a></p>
                        </form>
                    </div>
                  </div>
                  @endif
            @else

                <li><a href="{{ route('login') }}" class="">Entrar</a></li>
            @endauth
        @endif

    </ul>
</nav>
