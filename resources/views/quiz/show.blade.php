<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('message'))
                <div class="text-gray-800 font-bold p-4">
                    {{ session('message') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('quiz.index') }}" enctype="multipart/form-data">Terug</a>
                    <form action="{{ route('quiz.export') }}" method="post">
                        @csrf
                        <button type="submit">Exporteren</button>
                    </form>
                    <h1 class="font-bold text-2xl">{{ $quiz->name }}</h1>
                    <h2 class="font-bold mt-6">Vragen:</h2>
                    <ul>
                        @foreach($quiz->questions as $question)
                            <li>{{ $question->question }}</li>
                        @endforeach
                    </ul>

                    <h2 class="font-bold mt-6">Antwoorden:</h2>
                    <ul>
                        @foreach($quiz->questions as $question)
                            <li class="font-semibold mt-4">{{ $question->question }}</li>
                            <ul>
                                @foreach($question->answers as $answer)
                                    <li>{{ $answer->answer }} (Correct: {{ $answer->is_correct ? 'Ja' : 'Nee' }})</li>
                                @endforeach
                            </ul>
                        @endforeach
                    </ul>

                    <h2 class="font-bold mt-6">Tags:</h2>
                    <ul>
                        @foreach($quiz->questions as $question)
                            @foreach($question->tags as $tag)
                                <li>{{ $tag->name }}</li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>