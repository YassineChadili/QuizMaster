<x-app-layout>
    <div class="question-type">
        @if (\Session::has('error'))
            <p style="color: red">{!! \Session::get('error') !!}</p>
        @endif

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
        <form action="{{ route('questions.update', $question->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-input-questions">
                <label for="name">Vraag</label>
                <input type="text" name="question" id="" value="{{ $question->question }}">
            </div>
            <div class="form-input-questions">
                <label for="name">Antwoord</label>
                <input type="text" name="answer" id="">
            </div>
            <input type="hidden" name="type" value="open">
            <input type="submit" name="" id="">
        </form>
    </div>
    <div class="multiple-choice-form" style="display: none">
        <form action="{{ route('questions.update', $question->id) }}" enctype="multipart/form-data" method="POST" id="extra-questions-container">
            @csrf
            @method('PUT')
            <div class="choices">
                <div class="form-input-questions">
                    <label for="name">Vraag</label>
                    <input type="text" name="question" id="" value="{{ $question->question }}">
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
            <input type="hidden" name="type" value="multiple">
            <input type="submit" name="" id="">
        </form>
    </div>
    <script>
        const openForm = document.querySelector('.open-form');
        const multipleForm = document.querySelector('.multiple-choice-form');
        let questionNumber = 2;

        const open = document.getElementById('open');
        const multiple = document.getElementById('choice');

        function check_type() {
            if(multiple.checked){
                multipleForm.style.display = "block";
                openForm.style.display = "none";
            }
            else if(open.checked){
                openForm.style.display = "block";
                multipleForm.style.display = "none";
            }
        }
    </script>
</x-app-layout>