
<nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm  ">
    <div class="container">
        <a class="navbar-brand text-danger" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent ">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto text-white">
                <li><a class="py-2 navbar-brand text-white ml-5" href="/about">About</a></li>
                <li><a class="py-2 navbar-brand text-white" href="/services">Services</a></li>
                <li><a class="py-2 navbar-brand text-white" href="/posts">Blog</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

            </ul>>

                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">

                        <a class="navbar-brand text-warning" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="navbar-brand text-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link navbar-brand text-warning" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/dashboard" class="dropdown-item">Dashboard</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
