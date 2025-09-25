<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class AddQuestionController extends Controller
{
    //

      function add_question(){
            // $questions = Question::with('parent')->orderBy('parent')->get();
                $questions = Question::with('parent')->orderBy('parent')->get();


        return view('add_questions', compact('questions'));
    }

//     function getQuestionPath($question)
// {
//     $titles = [];
//     while ($question->parent) {
//         $question = $question->parent;
//         $titles[] = $question->title;
//     }
//     return implode(' => ', array_reverse($titles));
// }

}
