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
                    <div class="flex justify-between mb-10">
                        <div class="form-group">
                            <form method="get" action="/search">
                                <div class="flex items-center">
                                    <input class="border border-gray-300 rounded-md p-2 mr-2" name="search" placeholder="Filter op vraag...."
                                        value="{{ isset($search) ? $search : '' }}">

                                        <select name="tag">
                                            <option value="">Alle Tags</option>
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag }}" @if($tag == $selectedTag) selected @endif>{{ $tag }}</option>
                                            @endforeach
                                        </select>
                                        
                                    <button type="submit">Filteren</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form action="{{ route('quiz.store') }}" method="post">
                        @csrf
                        <label for="name">Toets naam:</label>
                        <input type="text" name="name" id="name" required>
                        <div class="form-group my-5">
                            <label class="font-bold">Selecteer de vragen die u aan de quiz wilt toevoegen:</label>
                            @foreach($questions as $question)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="question_ids[]" value="{{ $question->id }}">
                                    <label class="form-check-label" for="question{{ $question->id }}">
                                        {{ $question->question }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit">Toets aanmaken</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>