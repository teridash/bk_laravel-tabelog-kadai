<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item mr-5">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        <li class="nav-item mr-5">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <hr>
                        <li class="nav-item mr-5">
                          <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
                        </li>
                        <li class="nav-item mr-5">
                          <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                        @else
                        <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('mypage') }}">
                        <i class="fas fa-user mr-1"></i><label>マイページ</label>
                        </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>