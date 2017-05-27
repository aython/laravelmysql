<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudViewController extends Controller
{
    public function fdgh()
    {

        $hj['hj'] = DB::table('access')->get();
        if(count($hj) >=1)
        {
            return view('show',$hj);

        }

    }
}
