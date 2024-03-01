<x-app-layout>
    <div class="container flex justify-center">
        <div class="tags">
            <a href="{{route('tags.create')}}" class="mb-15">Maak een tag aan</a>
            @if (\Session::has('Succes'))
                <p style="color: green">{!! \Session::get('error') !!}</p>
            @endif
            
            @foreach ($tags as $tag)
            <form method="POST" action="{{route('tags.update', $tag->id)}}">
                @csrf
                @method('PUT')
                <input type="text" value="{{$tag->name}}" name="name" id="">
                <div class="flex">
                    <input type="submit" value="Aanpassen" name="" id="">
            </form>
            <form method="POST" action="{{ route('tags.destroy', $tag->id) }}">
                @csrf
                @method('DELETE')
                <input class="ml-3" type="submit" value="Verwijderen" name="" id="">
                </div>
            </form>
            @endforeach
        </div>
    </div>
</x-app-layout>