<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testtbl;
use App\Models\req_to_agent;
use App\Models\d_agent;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class DashboardController extends Controller
{
    //
     function dashboard(){

        $total_cus_today = testtbl::whereDate('created', now()->toDateString())->count();
        $total_req_today = req_to_agent::whereDate('datetime', now()->toDateString())->count('ra_id');
        $total_accepted_today = d_agent::whereDate('datetime', now()->toDateString())->distinct('ra_id')->count('ra_id');

        //operator dashboard view
          $agents = Users::where('role', 2)->get();
        $agentsData = $agents->map(function ($agent) {
            $total = req_to_agent::whereDate('datetime', now()->toDateString())
                        ->where('u_id', $agent->id)
                        ->distinct('ra_id')
                        ->count('ra_id');

            return [
                'id'    => $agent->id,
                'name'  => $agent->name,
                'lname' => $agent->lname,
                'total' => $total,
            ];
        });

        return view('dashboard',compact('total_cus_today', 'total_req_today', 'total_accepted_today','agentsData'));
    }
}
