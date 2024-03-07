<header>
    <div class="border border-gray-400 bg-gray-400 p-6 flex justify-around">
        <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="200" alt="logo"></a>
        <div class="flex justify-between items-center flex-row">
            @auth
            <a class="mx-5 text-3xl" href="{{ route('quiz.index') }}">Toetsen</a>
                <a class="mx-5 text-3xl" href="{{ route('questions.index') }}">Vragen</a>
                <a class="mx-5 text-3xl" href="{{ route('tags.index') }}">Tags</a>
            @endauth
        </div>
        <div class="flex items-center">
            @if (Route::has('login'))
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="text-2xl mx-5 text-red-700" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            .closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('register') }}" class="text-2xl">Register</a>
                    <a href="{{ route('login') }}" class="text-2xl mx-5">Login</a>
                @endauth
            @endif
        </div>
    </div> 
</header>