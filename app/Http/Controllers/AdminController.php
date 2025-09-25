<?php

namespace App\Http\Controllers;
use App\Models\testtbl;
use App\Models\req_to_agent;
use App\Models\d_agent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   
    function operator(){
        return view('operator');
    }
  
  
   
    function add_key_search(){
        return view('add_key_search');
    }
    

}
