
        <header class="header">
            <div class="logo text-center">
                <a href="/">
                <img src="img/logo.png" alt="barrieing logo" width="70%">
                </a>
            </div>
            @auth
                <a href="{{ url('/') }}">Home</a>
            @else
            <div class="login">
                <a class="text-white" href="{{ route('login') }}">Login</a>
                {{-- <a class="text-white" href="{{ route('register') }}">Register</a> --}}
            </div>
            @endauth
        </header>

