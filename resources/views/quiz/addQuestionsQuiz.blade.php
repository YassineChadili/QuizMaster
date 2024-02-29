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
                    <a href="{{ route('quiz.index') }}" enctype="multipart/form-data">Terug</a>
                    <form action="{{ route('quiz.addQuestionsToQuiz', $quiz) }}" method="post">
                        @csrf
                        <div class="form-group my-5">
                            <label>Selecteer de vragen die u aan de quiz wilt toevoegen:</label>
                            @foreach($questions as $question)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_ids[]" value="{{ $question->id }}">
                                    <label class="form-check-label" for="question{{ $question->id }}">
                                        {{ $question->question }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">Vragen toevoegen aan quiz</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
