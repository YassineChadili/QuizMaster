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
                    <div class="question-type">
                        @if (\Session::has('error'))
                            <p style="color: red">{!! \Session::get('error') !!}</p>
                        @endif

                        <!-- Select question type -->
                        <p class="font-bold text-lg">Selecteer vraagtype:</p>
                        <div class="open-question">
                            <input onclick="check_type()" type="radio" name="question_choice" id="open" value="open">
                            <label for="open">Open vraag</label>
                        </div>
                        <div class="choice-question">
                            <input onclick="check_type()" type="radio" name="question_choice" id="choice" value="choice">
                            <label for="choice">Meerkeuze vraag</label>
                        </div>
                    </div>


                    <div class="open-form" style="display: none">
                        <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-input-questions">
                                <label for="name">Vraag</label>
                                <input type="text" name="question" id="">
                            </div>
                            <div class="form-input-questions">
                                <label for="name">Antwoord</label>
                                <input type="text" name="answer" id="">
                            </div>
                            <div class="form-input-questions">
                                <label for="tag">Tag toevoegen</label>
                                <select name="tag" id="">
                                    <option disabled selected value="">Kies een tag</option>
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="type" value="open">
                            <input type="submit" name="" id="">
                        </form>
                    </div>
                    <div class="multiple-choice-form" style="display: none">
                        <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST" id="extra-questions-container">
                            @csrf
                            <div class="choices">
                                <div class="form-input-questions">
                                    <label for="name">Vraag</label>
                                    <input type="text" name="question" id="">
                                </div>
                                <div class="form-input-questions">
                                    <label for="tag">Tag toevoegen</label>
                                    <select name="tag" id="">
                                        <option disabled selected value="">Kies een tag</option>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <h2>Keuzes</h2>
                                <div class="form-input-questions-0">
                                    <input type="radio" name="right_answer" value="0" id="">
                                    <input type="text" name="answers[]" id="">
                                </div>
                                <div class="form-input-questions-1">
                                    <input type="radio" name="right_answer" value="1" id="">
                                    <input type="text" name="answers[]" id="">
                                </div>
                                <div class="form-input-questions-2">
                                    <input type="radio" name="right_answer" value="2" id="">
                                    <input type="text" name="answers[]" id="">
                                </div>
                            </div>
                            <div class="addChoices">
                                <button type="button" onclick="addQuestion()">Voeg nog een vraag toe</button>
                                <button type="button" onclick="removeQuestion()">Verwijder een vraag</button>
                            </div>
                            <input type="hidden" name="type" value="multiple">
                            <input type="submit" name="" id="">
                        </form>
                    </div>
                    <script src="{{ asset('js/questionCreate.js') }}" defer></script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
