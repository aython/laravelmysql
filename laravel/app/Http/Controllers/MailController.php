<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
    public function basic_email(){
        $data = array('name'=>"Aqhib Javeed");

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('ajaveed@altimetrik.com', 'Tutorials Point')->subject
               ('Laravel Basic Testing Mail');
            $message->from('ajaveed@altimetrik.com','Aqhib Javeed');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email(){
        $data = array('name'=>"Aqhib Javeed");
        Mail::send('mail', $data, function($message) {
            $message->to('ajaveed@altimetrik.com', 'Tutorials Point')->subject
               ('Laravel HTML Testing Mail');
            $message->from('ajaveed@altimetrik.com','Aqhib Javeed');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email(){
        $data = array('name'=>"Aqhib Javeed");
        Mail::send('mail', $data, function($message) {
            $message->to('ajaveed@altimetrik.com', 'Tutorials Point')->subject
               ('Laravel Testing Mail with Attachment');
            $message->attach('C:\Users\ajaveed\Pictures\alt.PNG');
            $message->attach('C:\Users\ajaveed\Pictures\alt2.png');
            $message->from('ajaveed@altimetrik.com','Aqhib Javeed');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}