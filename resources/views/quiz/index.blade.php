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
                    <div class="overflow-x-auto">
                        <a class="px-6 py-3 text-left" href="{{ route('quiz.create') }}" enctype="multipart/form-data">Toets aanmaken</a>
                        <table class="min-w-full table-auto mt-5">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Toets naam</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($quizzes as $quiz)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('quiz.show', $quiz) }}" class="text-blue-500 hover:text-blue-700">{{ $quiz->name }}</a> <br>
                                            <a href="{{ route('quiz.addQuestionsQuiz', $quiz) }}">Vragen toevoegen</a>
                                            <form action="{{ route('quiz.export') }}" method="post">
                                                @csrf
                                                <button type="submit">Exporteren</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>