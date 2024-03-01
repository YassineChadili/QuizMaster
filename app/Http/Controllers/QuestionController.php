<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('questions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::orderBy('id')->get();
        return view('questions.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->type == "open"){
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
                'tag' => 'required'
            ]);

            //Check of de tag bestaat
            $tag = Tag::find($request->tag);

            if(!$tag){
                return redirect()->back();
            }

            $question = Question::create([
                'question' => $request->question,
                'type' => 'open',
            ]);

            $question->tags()->attach($tag);

            $questionId = $question->id;

            Answer::create([
                'question_id' => $questionId,
                'answer' => $request->answer,
                'is_correct' => true
            ]);
        }
        else if($request->type == "multiple"){
            $request->validate([
                'right_answer' => 'required',
                'question' => 'required',
                'tag' => 'required'
            ]);

            //Hij validate of alle keuzes zijn ingevuld (Answers)
            if(in_array(null, $request->answers, true)){
                return redirect()->back();
            }

            $question = Question::create([
                'question' => $request->question,
                'type' => 'multiple choice',
            ]);

            $questionId = $question->id;

            foreach($request->answers as $number => $question){
                Answer::create([
                    'question_id' => $questionId,
                    'answer' => $question,
                    'is_correct' => ($number == $request->right_answer)
                ]);
            }
        }
        else{
            return redirect()->back()->with('Error', 'Geen type question mee gegeven');
        }

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}
