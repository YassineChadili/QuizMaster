<div>
    Aantal vragen:
    <table>
        <thead class="border-2 border-black">
            <tr class="divide-x-2 divide-y-2 divide-black">
                <th>Vraag</th>
                <th>Antwoorden</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody class="border-2 border-black divide-y-2 divide-black">
            @foreach ($questions as $question)
                <tr class="divide-x-2 divide-black">
                    <td>{{ $question->question }}</td>
                    <td class="divide-y-2 divide-gray-300">

                        <!-- -->
                        @if ($question->type === "multiple choice")
                            @foreach ($question->answers as $answer)
                                <p class="{{ $answer->is_correct ? 'text-green-500 ' : '' }}">{{ $loop->iteration }}. {{  $answer->answer }}</p>
                            @endforeach
                        @else
                            <p><i>Open antwoord</i></p>
                        @endif
                    </td>
                    <td>
                        @if ($question->tags->count() > 0)
                            @foreach ($question->tags as $tag)
                                {{ $tag->name }}
                                <!-- Add ', ' between each tag -->
                                {{ $question->tags->count() > 1 && $loop->iteration <= ($question->tags->count() - 1 ) ? ', ' : '' }}
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
