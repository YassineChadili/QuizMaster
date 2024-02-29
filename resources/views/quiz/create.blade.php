<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('quiz.store') }}" method="post">
                        @csrf
                        <label for="name">Toets naam:</label>
                        <input type="text" name="name" id="name" required>
                        <button type="submit">Toets aanmaken</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>