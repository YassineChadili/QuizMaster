<header>
    <div class="border border-gray-400 bg-gray-400 p-6 flex justify-around">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="200" alt="logo"></a>
        <div class="flex justify-between items-center flex-row">
            <a class="mx-5 text-3xl" href="{{ url('/dashboard') }}">Overzicht</a>
            @auth
                <a class="mx-5 text-3xl" href="{{ url('/questions') }}">Vragen</a>
                <a class="mx-5 text-3xl" href="{{ url('/tags') }}">Tags</a>
            @endauth
        </div>
        <div class="flex items-center">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}"><img src="{{ asset('img/user-icon.png') }}" alt="user-dashboard"></a>
                @else
                    <a href="{{ route('register') }}" class="text-2xl">Register</a>
                    <a href="{{ route('login') }}" class="text-2xl mx-5">Login</a>
                @endauth
            @endif
        </div>
    </div> 
</header>