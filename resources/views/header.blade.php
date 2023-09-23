<header class="header-wp">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand logo-top" href="Home.html">
                <img src="images/logo-header.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdawn-header-1" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" href="#">
                            <i class="fa-light fa-location-dot"></i> Select location
                        </a>
                        <!-- Dropdown menu content -->
                    </li>
                    <li class="nav-item dropdown navbarmenu-twoli">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Property Services</a>
                        <!-- Dropdown menu content -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="PostProperty.html">Post Property</a>
                    </li>
                </ul>
                <ul class="navbar-nav me-auto2 mb-2 mb-lg-0">
                    <li class="header-log-btn">
                        <ul class="submenu-ulli">
                            @guest
                            @if (Route::has('login'))
                            <li class="header-btn-login">
                                <a href="{{ route('login') }}">Log in</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="header-btn-signup">
                                <a href="{{ route('register') }}">Sign Up</a>
                            </li>
                            @endif
                            @else
                            <li class="header-btn-login">
                                @if(Auth::user()->type === 'user')
                                <a href="/home">{{ Auth::user()->name }}</a>
                                @elseif(Auth::user()->type === 'admin')
                                <a href="/admin/home">{{ Auth::user()->name }}</a>
                                @endif
                            </li>
                            <li class="header-btn-login">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                                    Out</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>