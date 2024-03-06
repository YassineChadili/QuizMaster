<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quiz.index', ['quizzes' => $quizzes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $questions = Question::all();
        return view('quiz.create', ['questions' => $questions]);
    }

    public function search(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $quiz = Quiz::create([
            'name' => $request->name,
        ]);
    
        $questionIds = $request->input('question_ids');
        $quiz->questions()->attach($questionIds);
    
        return redirect()->route('quiz.index')->with('message', 'Toets is succesvol aangemaakt.');
    }

    public function storeQuizQuestions(Request $request, Quiz $quiz)
    {
        // Haal de ID's op van de vragen die aan de quiz moeten worden toegevoegd
        $questionIds = $request->input('question_ids');

        // Voeg de vragen toe aan de quiz
        $quiz->questions()->attach($questionIds);

        // Haal de vragen en andere gerelateerde gegevens op voor de showpagina van de quiz
        $quiz->load('questions.answers', 'tags');

        return redirect()->route('quiz.show', ['quiz' => $quiz])->with('message', 'Vragen zijn succesvol aan de quiz toegevoegd.');
    }

    public function showQuizQuestions(Quiz $quiz)
    {
        $questions = Question::all();
        return view('quiz.showQuizQuestions', ['quiz' => $quiz, 'questions' => $questions]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        $quiz->load('questions.answers', 'tags'); // Laden van gerelateerde gegevens (vragen, antwoorden, tags) voor de quiz
        return view('quiz.show', ['quiz' => $quiz]); // Doorsturen van de $quiz variabele naar de 'quiz.show' view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function export() 
    {
       
    }
}
