<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MaksoodController extends Controller
{
    public function login(Request $req)
    {
        $usernamej = $req->input('example');
            $hj['hj'] = DB::table('access')->where(['emailid' => $usernamej])->get(['report']);
            $jkop= 1;

        if(count($hj['hj']) > 0)
        {
            foreach($hj['hj'] as $doi){
                $jkop++;
              //here ia m genrating session var for all the reports
                $req->session()->put('TABLEA_REPORT_NAME_$jkop',$doi->report);
                //$dikha2=$req->session()->get('TABLEA_REPORT_NAME_$jkop');
                //echo $dikha2;

            }
            $arij = collect($hj['hj']);
            $req->session()->put('cart',$arij);
           //echo $req->session()->get('cart');
           
                        //$value=$req->session()->put('name','ajaveed');
            //$dikha=$req->session()->get('name');

            //echo $dikha;
             return view('show',$hj);

            }



        else{

            echo "Soory you are not found";
        }
    }
}
