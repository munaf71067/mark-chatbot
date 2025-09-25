<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testtbl;

class ReportController extends Controller
{
    //

     function view_report(){
        $latestMessages = testtbl::select('testtbl.*')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MAX(id)')
                  ->from('testtbl')
                  ->groupBy('sender');
        })
        ->orderBy('created', 'DESC')
        ->get();


        return view('view_report',  compact('latestMessages'));
    }  
}
