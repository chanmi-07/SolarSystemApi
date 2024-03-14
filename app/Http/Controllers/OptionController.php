<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use QuizHelper;

class OptionController extends Controller
{

    public function getAnswer($ids, Request $request)
    {
        $ids = explode(',', $ids);
        
        $options = Option::whereIn('id', $ids)
        ->with('question:id,question')
        ->get(['id', 'option', 'question_id', 'is_correct']);
        
        $nOptions = $options->count();

        $data = [];

        foreach ($options as $option) 
        {
            $option->message = $option->is_correct ? 'Correcto' : 'Incorrecto';

            $data[] = $option;
        }

        $correctOptions = $options->where('is_correct', true)->count();
        $percent = QuizHelper::getPercentage($nOptions, $correctOptions);
        $score = $correctOptions.'/'.$nOptions;
        $withData = $request->withData ? ['data' => $data] : [];

        $response = [
            'totalQuestions' => $nOptions,
            'percent' => $percent,
            'score' => $score,
            ...$withData
        ];

        return response()->json($response);
    }
}
