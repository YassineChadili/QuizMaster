<header>
    <div class="nav">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="200" alt="logo"></a>
        <div class="nav-links">
            <a href="{{ url('/overview') }}">Overzicht</a>
            <a href="{{ url('/questions') }}">Vragen</a>
            <a href="{{ url('/tags') }}">Tags</a>
        </div>
        <div class="user">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"><img src="" alt="user-dashboard"></a>
                @else
                    <a href="{{ route('login') }}"><img src="{{ asset('img/user-icon.png') }}" width="100" alt="user-login"></a>
                @endauth
            @endif
        </div>
    </div> 
</header>