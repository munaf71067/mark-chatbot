<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //

      function view_question(){
                $questions = Question::all();

        return view('view_questions', compact('questions'));
    }

     private function getParentTitles($question)
    {
        $titles = [];
        while ($question && $question->parent != 0) {
            $question = Question::find($question->parent);
            if ($question) {
                $titles[] = $question->title;
            }
        }
        return array_reverse($titles);
    }
}
