<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $questions = Question::with('options');

        $request->limit && $questions->take($request->limit);
        $request->random && $questions->inRandomOrder();
        $questions = $questions->get();

        $data = [];
        foreach ($questions as $question) 
        {
            $data[] = 
            [
                'id' => $question->id,
                'question' => $question->question,
                'options' => 
                $question->options->map(function ($option) 
                {
                    return 
                    [
                        'id' => $option->id,
                        'option' => $option->option,
                    ];
                })
            ];
        }

        $reponse = 
        [
            'info' =>
            [
                'count' => $request->page ? $questions->total() : $questions->count(),
                ...($paginateInfo ?? []),
            ],
            'questions' => $data,
        ];

        return response()->json($reponse);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
