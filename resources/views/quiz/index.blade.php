<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quiz overzicht') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('quiz.export') }}" method="post">
                        @csrf
                        <button type="submit">Exporteren</button>
                    </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Toets naam</th>
                                <th>Vragen</th>
                                <th>Antwoorden</th>
                                <th>Tags</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
