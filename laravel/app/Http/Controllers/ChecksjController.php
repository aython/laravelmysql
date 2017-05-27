<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChecksjController extends Controller
{
    public function iam(Request $req)
    {
       
            $dikha=$req->session()->get('name');
            echo $dikha;
       
            }

}
