<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Mail
use Mail;
use App\Mail\SystemSendMail;

use Illuminate\Support\Facades\View;
  

class UserController extends Controller
{
    public function sendMail()
    {
        $mailData = [
            'title' => 'Mail from lecongnamdev.com',
            'body' => 'password off you [hello12s]'
        ];
         $mail = 'weceke8419@etondy.com';
        Mail::to($mail)->send(new SystemSendMail($mailData));

        return redirect()->route('home');
    }


    public function formLogin(){
        return view('login.login');
    }


    public function login()
    {
        
    }
}
