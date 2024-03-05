<div>
    <table>
        <thead class="border-2 border-black">
            <tr class="divide-x-2 divide-y-2 divide-black">
                <th>Vraag</th>
                <th>Antwoorden</th>
                <th>Tags</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody class="border-2 border-black divide-y-2 divide-black">
            @foreach ($questions as $question)
                <tr class="divide-x-2 divide-black">
                    <td class="p-2">{{ $question->question }}</td>
                    <td class="divide-y-2 divide-gray-300 p-2">
                        <!-- Show answers for multiple choice questions, or empty state for open questions -->
                        @if ($question->type === 'multiple choice')
                            @foreach ($question->answers as $answer)
                                <p class="{{ $answer->is_correct ? 'text-green-500 ' : '' }}">{{ $loop->iteration }}.
                                    {{ $answer->answer }}</p>
                            @endforeach
                        @else
                            <p><i>Open antwoord</i></p>
                        @endif
                    </td>
                    <td class="p-2">
                        @if ($question->tags->count() > 0)
                            @foreach ($question->tags as $tag)
                                {{ $tag->name }}
                                <!-- Add ', ' between each tag -->
                                {{ $question->tags->count() > 1 && $loop->iteration <= $question->tags->count() - 1 ? ', ' : '' }}
                            @endforeach
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <!-- On button click, delete the question  -->
                        <button class="text-red-400 hover:underline hover:text-red-600"
                            wire:click="delete({{ $question->id }})"
                            wire:confirm="Weet je zeker dat je deze vraag wilt verwijderen?">
                            Verwijderen</button>
                    </td>
                    <td>
                        <a class="text-green-400 hover:underline hover:text-green-500" href="{{ route('questions.edit', $question->id) }}">Aanpassen</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
