<x-app-layout>
    <div class="flex items-center text-center flex-col m-[150px]">
        @if(isset($user))
            <h1 class="text-6xl">Welkom {{ $user }}</h1>
        @else
            <h1 class="text-6xl">Welkom Gebruiker</h1>
        @endif
        <a class="border border-black rounded-md text-4xl py-3 px-10 my-10 hover:text-white hover:bg-black duration-500" href="{{ url('/overview') }}">Naar Overzicht</a>
    </div>
</x-app-layout>