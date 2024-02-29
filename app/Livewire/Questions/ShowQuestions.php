<?php

namespace App\Livewire\Questions;

use App\Models\Question;
use Livewire\Component;

class ShowQuestions extends Component
{

    public $questions;
    public function mount()
    {
        $this->questions = Question::all();
    }
    public function render()
    {
        return view('livewire.questions.show-questions');
    }
}
