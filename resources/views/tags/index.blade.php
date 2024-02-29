<x-app-layout>
    <div class="container" style="display: flex; justify-content: center;">
        <div class="tags">
            <a href="{{route('tags.create')}}" style="margin-bottom: 15px;">Maak een tag aan</a>
            @if (\Session::has('Succes'))
                <p style="color: green">{!! \Session::get('error') !!}</p>
            @endif
            
            @foreach ($tags as $tag)
            <form method="POST" action="{{route('tags.update', $tag->id)}}">
                @csrf
                @method('PUT')
                <input type="text" value="{{$tag->name}}" name="name" id="">
                <div class="buttons" style="display: flex">
                    <input type="submit" value="Aanpassen" name="" id="">
            </form>
            <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
                @csrf
                @method('DELETE')
                <input style="margin-left: 10px" type="submit" value="Verwijderen" name="" id="">
                </div>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>