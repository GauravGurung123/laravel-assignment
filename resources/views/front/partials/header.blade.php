<div class="tm-header">
    <div class="container-fluid">
        <div class="tm-header-inner">
            <a href="#" class="navbar-brand tm-site-name">Classic</a>
            
            <!-- navbar -->
            <nav class="navbar tm-main-nav">

                <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                    &#9776;
                </button>
                
                <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                    <ul class="nav navbar-nav">
                        <li class="nav-item {{ request()->is(['home','/']) ? 'active' : '' }}">
                            <a href="/home" class="nav-link">Home</a>
                        </li>
                        
                        <li class="nav-item {{ request()->is('post') ? 'active' : '' }}" >
                            <a href="/post" class="nav-link">Post</a>
                        </li>


                        <!-- Authentication Links -->

                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item {{ request()->is('/register') ? 'active' : '' }}">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                        @else
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" class="nav-link">About Me</a>
                        </li>
                        <li class="nav-item" style="display:inline-flex">
                            <a class="nav-link" href="#">
                                {{ Auth::user()->name }}
                            </a>

                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
