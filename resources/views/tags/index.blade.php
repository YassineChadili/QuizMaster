<x-app-layout>
    <div class="container">
        <a href="{{route('tags.create')}}">Maak een tag aan</a>
        <div class="tags" style="margin-top: 30px;">
            @foreach ($tags as $tag)
            <form method="POST" action="{{route('tags.update', $tag->id)}}">
                @csrf
                @method('PUT')
                <input type="text" value="{{$tag->name}}" name="" id="">
                <div class="buttons" style="display: flex">
                    <input type="submit" value="Aanpassen" name="" id="">
            </form>
            <form action="POST" action="{{route('tags.destroy', $tag->id)}}">
                @csrf
                @method('DELETE')
                <input style="margin-left: 10px" type="submit" value="Verwijderen" name="" id="">
                </div>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>