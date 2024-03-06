<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vragen toeovoegen') }}
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
                    @if (\Session::has('error'))
                        <p style="color: red">{!! \Session::get('error') !!}</p>
                    @endif

                    <!-- Select question type -->
                    <div class="question-type">
                        <h3 class="font-bold text-lg">Selecteer vraagtype:</h3>
                        <div class="open-question">
                            <input onclick="check_type()" type="radio" name="question_choice" id="open" value="open">
                            <label for="open">Open vraag</label>
                        </div>
                        <div class="choice-question">
                            <input onclick="check_type()" type="radio" name="question_choice" id="choice" value="choice">
                            <label for="choice">Meerkeuze vraag</label>
                        </div>
                    </div>

                    <!-- Input fields for open questions -->
                    <div class="open-form" style="display: none">
                        <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-input-questions mt-4">
                                <x-input-label for="name">Vraag</x-input-label>
                                <x-text-input type="text" name="question" id=""/>
                            </div>
                            <div class="form-input-questions mt-4">
                                <x-input-label for="name">Antwoord</x-input-label>
                                <x-text-input type="text" name="answer" id=""/>
                            </div>
                            <div class="form-input-questions mt-4">
                                <x-input-label for="tag">Tags</x-input-label>
                                <x-select-input name="tag">
                                    <option disabled selected value="">--- Selecteer een tag ---</option>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </x-select-input>
                            </div>
                            <a href="{{ route('tags.index') }}"><x-secondary-button class="mt-2">Tags toevoegen</x-secondary-button></a>
                            <br>
                            <input type="hidden" name="type" value="open">
                            <x-primary-button type="submit" class="mt-4">Toevoegen</x-primary-button>
                        </form>
                    </div>

                    <!-- Input fields for multiple choice questions -->
                    <div class="multiple-choice-form" style="display: none">
                        <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST" id="extra-questions-container">
                            @csrf
                            <div class="choices mt-4">
                                <div class="form-input-questions">
                                    <x-input-label for="name">Vraag</x-input-label>
                                    <x-text-input type="text" name="question" id=""/>
                                </div>
                                <div class="form-input-questions mt-4">
                                    <x-input-label for="tag">Tags</x-input-label>
                                    <x-select-input name="tag">
                                        <option disabled selected value="">--- Selecteer een tag ---</option>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </x-select-input>
                                </div>
                                <a href="{{ route('tags.index') }}"><x-secondary-button class="mt-2">Tags toevoegen</x-secondary-button></a>
                                <br>
                                <div class="mt-4">
                                    <h3 class="font-bold text-lg">Antwoorden:</h3>
                                    <p>Selecteer het correcte antwoord</p>
                                    <div class="form-input-questions-0">
                                        <input type="radio" name="right_answer" value="0" id="">
                                        <x-text-input type="text" name="answers[]" id=""/>
                                    </div>
                                    <div class="form-input-questions-1">
                                        <input type="radio" name="right_answer" value="1" id="">
                                        <x-text-input type="text" name="answers[]" id=""/>
                                    </div>
                                    <div class="form-input-questions-2">
                                        <input type="radio" name="right_answer" value="2" id="">
                                        <x-text-input type="text" name="answers[]" id=""/>
                                    </div>
                                </div>

                            </div>
                            <div class="addChoices ml-5 mt-2">
                                <x-secondary-button type="button" onclick="addQuestion()"> + </x-secondary-button>
                                <x-secondary-button type="button" onclick="removeQuestion()"> - </x-secondary-button>
                            </div>
                            <input type="hidden" name="type" value="multiple">
                            <x-primary-button type="submit" class="mt-4">Toevoegen</x-primary-button>
                        </form>
                    </div>

                    <!-- Script for showing open/multiple choice input fields -->
                    <script src="{{ asset('js/questionCreate.js') }}" defer></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
