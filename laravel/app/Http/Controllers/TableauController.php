<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableauController extends Controller
{

    public function get_trusted_url($user='admin',$server='tableau.altimetrik.com',$view_url='t/ive/views/CDashboard/MTD-D')
    {
        function get_trusted_ticket($wgserver, $user, $remote_addr)
        {
            $server = $wgserver;
            $url = 'https://'.$server.'/trusted';
            $ch = curl_init($url);
            $data = array('target_site' => 'ive', 'username' => $user, 'client_ip' => $remote_addr);

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            return curl_exec($ch);
            //echo "<iframe src=$kl></iframe>";
            curl_close($ch);
        }

        $params = '&:embed=yes&:toolbar=yes';

        $ticket = get_trusted_ticket($server, $user, $_SERVER['REMOTE_ADDR']);
        if (strcmp($ticket, "-1") != 0) {
            $name =  "https://$server/trusted/$ticket/$view_url?$params";
            return view('ifr',['name' => $name]);
        }
        else
            echo 0;

    }


}
