<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\req_to_agent ;
use App\Models\Users;

use Illuminate\Support\Facades\DB;
class RequestController extends Controller
{
    //
    
    public function loadReq(Request $request)
    {
        if ($request->input('table') === 'load_req') {
            $requests = req_to_agent::with('user')
                ->where('mode', '!=', 2)
                ->orderByDesc('ra_id')
                ->get();

                $imgUrl = asset("assets/img/user.png");

            // Response ko Blade partial ya HTML string bana kar bhejna
            $html = '';
            foreach ($requests as $req) {
                $html .= '
                
                 <li class="list-group-item new">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-40  rounded-circle">
                                                    <img src="'. $imgUrl.'" alt="">
                                                </figure>
                                            </div>
                                     
                                            <div class="col-9 align-self-center ps-0">
                                                <div class="row g-0">
                                                    <div class="col-8">
                                                        <p class="text-truncate mb-0">'. $req->name .'</p>
                                                    </div>
                                                    <div class="col-4 text-end"><small class="opacity-50 fs-10 mb-1">
                                                       

                                    ';
                
                                    // <button class="btn btn-sm btn-accent active">accept</button>
                
                // <tr>
                //     <td style="font-weight:600;">' . $req->name . '</td>
                //     <td style="font-weight:600;">' . $req->phone_no . '</td>
                //     <td style="font-weight:600;">';

                if (empty($req->u_id) || $req->u_id == 0) {
                    $html .= '<button onclick="accept(' . $req->ra_id . ')" class="btn btn-sm btn-accent active">Accept</button>';
                } else {
                    $html .= $req->user ? $req->user->name . ' ' . $req->user->lname : '';
                }

                $html .= '</small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>';
            }

            return response($html);
        }

        return response('');
    }


   


    
    public function transferData(Request $request)
    {
        $u_id = 15; // session se user id

        $rows = DB::table('transfer_to as t')
            ->join('req_to_agent as ra', 'ra.ra_id', '=', 't.ra_id')
            ->select(
                't.*',
                'ra.*',
                't.ra_id as tra_id',
                DB::raw("(select concat(name,' ',lname) from user where id = t.u_id) as uname")
            )
            ->where('to_agent', $u_id)
            ->where('t.status', 0)
            ->get();

        $html = '';
        foreach ($rows as $row) {
            $html .= '
                <tr>
                    <td>' . $row->uname . '</td>
                    <td>' . $row->name . '</td>
                    <td>' . $row->phone_no . '</td>
                    <td>
                        <button onclick="taccept(' . $row->ta_id . ',' . $row->tra_id . ')" 
                                class="btn btn-success btn-sm">Accept</button>
                    </td>
                    <td>
                        <button onclick="reject(' . $row->ta_id . ',' . $row->tra_id . ')" 
                                class="btn btn-danger btn-sm">Reject</button>
                    </td>
                </tr>
            ';
        }

        return response($html);
    }

    // transfer_data_idex (buttons alag row me)
    public function transferDataIdex(Request $request)
    {
        $u_id = 15;

        $rows = DB::table('transfer_to as t')
            ->join('req_to_agent as ra', 'ra.ra_id', '=', 't.ra_id')
            ->select(
                't.*',
                'ra.*',
                't.ra_id as tra_id',
                DB::raw("(select concat(name,' ',lname) from user where id = t.u_id) as uname")
            )
            ->where('to_agent', $u_id)
            ->where('t.status', 0)
            ->get();

        $html = '';
        foreach ($rows as $row) {
            $html .= '
                <tr>
                    <td>' . $row->uname . '</td>
                    <td>' . $row->name . '</td>
                    <td>' . $row->phone_no . '</td>
                </tr>
                <tr>
                    <td>
                        <button onclick="taccept(' . $row->ta_id . ',' . $row->tra_id . ')" 
                                class="btn btn-success btn-sm">Accept</button>
                    </td>
                    <td></td>
                    <td>
                        <button onclick="reject(' . $row->ta_id . ',' . $row->tra_id . ')" 
                                class="btn btn-danger btn-sm">Reject</button>
                    </td>
                </tr>
            ';
        }

        return response($html);
    }
}
