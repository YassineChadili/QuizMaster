<x-app-layout>
    <form method="POST" action="{{route('tags.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-input-tags">
            <label for="name">Naam</label>
            <input type="text" name="name" id="name">
        </div>
        <input type="submit" name="" id="">
    </form>
</x-app-layout>