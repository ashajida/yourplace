<nav class="primary-nav">
        <div class="primary-nav-list">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png')}}" /></a>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/dashboard" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span> 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
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

                        </ul>
                        @endguest
            </div>
            <div class="burger-menu">
                <div class="line"></div>
                <div  class="line"></div>
                <div  class="line"></div>
            </div>
        </div>
</nav>