<!-- Start Header Menu Area   -->
<header class="main_menu_area sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="header_logo">
                    <a href=""><p>MU-Booster</p>
                    </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="main_menu">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul>
                                @guest
                                <li>
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a class="nav-link" href="{{route('register')}}">Register</a>
                                </li>
                               @endif
                            @else
                                    <li>
                                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                                    </li>

                                    <li>
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                            @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>