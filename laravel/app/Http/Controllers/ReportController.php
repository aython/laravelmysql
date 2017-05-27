<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function checkj(Request $req)
    {
     if ($req->session()->has('cart')){
        $usernamej = $req->input('report');
       
        foreach($req->session()->get('cart') as $koolio){
        foreach($koolio as $kidn){
      if($kidn == "Globalops"){
$got = "https://www.w3schools.com";
return view('report',["posts"=>$got]);
}
}
}
    }else{
echo "session not there";
}
}
}
