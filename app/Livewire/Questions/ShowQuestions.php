<?php

namespace App\Livewire\Questions;

use App\Models\Question;
use Livewire\Component;

class ShowQuestions extends Component
{

    public $questions;

    public function delete(Question $question)
    {
        // Unlink all tags and quizzes from the question
        $question->tags()->detach();
        $question->quizzes()->detach();

        // Remove all answers, that belong to the question
        foreach($question->answers as $answer)
        {
            $answer->delete();
        }

        $question->delete();

        return redirect()->route('questions.index')->with('message',  'Vraag succesvol verwijderd');

    }
    public function mount()
    {
        $this->questions = Question::all();
    }
    public function render()
    {
        return view('livewire.questions.show-questions');
    }
}
