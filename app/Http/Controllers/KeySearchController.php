<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class KeySearchController extends Controller
{
    //

     function list_key_search(){
        $questions = Question::withCount('searches')->having('searches_count', '>', 0)->get();

        return view('list_key_search',  compact('questions'));
    }
}
