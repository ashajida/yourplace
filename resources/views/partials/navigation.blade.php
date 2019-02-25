<nav class="primary-nav">
    <div class="wrapper">
        <div class="primary-nav-list">
            <div class="logo">
                <a href="{{ url('/') }}">Yourplace</a>
            </div>
            <div class="nav-links">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
                <a class="nav-link" href="/rent">Rent</a>
                <a class="nav-link" href="/buy">Buy</a>
                <a class="nav-link" href="/agents">Agents</a>
                   @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                                <a class="nav-link _btn-ghost" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span> 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} 
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> --}}
                        </ul>
                        @endguest
            </div>
            <div class="burger-menu">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</nav>