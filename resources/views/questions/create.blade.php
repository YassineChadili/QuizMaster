<x-app-layout>
    <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-input-questions">
            <label for="name">Vraag</label>
            <input type="text" name="name" id="">
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
</x-app-layout>