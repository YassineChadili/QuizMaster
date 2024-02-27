<x-app-layout>
    <div class="question-type">
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
                <input type="submit" name="" id="">
            </div>
            <input type="submit" name="" id="">
        </form>
    </div>
    <div class="multiple-choice-form" style="display: none">
        <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-input-questions">
                <label for="name">Vraag</label>
                <input type="text" name="question" id="">
            </div>
            <h2>Keuzes</h2>
            <div class="form-input-questions">
                <input type="radio" name="right_answer" value="1" id="">
                <input type="text" name="questions[]" id="">
            </div>
            <div class="form-input-questions">
                <input type="radio" name="right_answer" value="2" id="">
                <input type="text" name="questions[]" id="">
            </div>
            <div class="form-input-questions">
                <input type="radio" name="right_answer" value="3" id="">
                <input type="text" name="questions[]" id="">
            </div>
            <input type="submit" name="" id="">
        </form>
    </div>
    <script>
        const openForm = document.querySelector('.open-form');
        const multipleForm = document.querySelector('.multiple-choice-form');

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