<header>
    <div class="border border-gray-400 bg-gray-400 p-6 flex justify-around">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="200" alt="logo"></a>
        <div class="flex justify-between items-center flex-row">
            <a class="mx-5 text-3xl" href="{{ url('/overview') }}">Overzicht</a>
            @auth
                <a class="mx-5 text-3xl" href="{{ url('/questions') }}">Vragen</a>
                <a class="mx-5 text-3xl" href="{{ url('/tags') }}">Tags</a>
            @endauth
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