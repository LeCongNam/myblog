<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

// Mail
use Mail;
use App\Mail\SystemSendMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    private $redis;

    function __construct()
    {
        $this->redis = Redis::connection();
    }

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

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;


        $validator = Validator::make($request->all(), [
            'username' => 'required | min:3 | max:20',
            'password' => 'required | min:3 ',
        ]);

        if (Auth::attempt(['username'=>$username, 'password'=> $password, 'deleted_at'=> null])) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function signup(Request $request)
    {
        $username = $request->username;
        $email = $request->email;


        $validator = Validator::make($request->all(), [
            'username' => 'required | min:3 | max:20',
            'email' => 'required | email',
            'password' => 'required | min:6 | max:20',
            'firstname' => 'required ',
            'lastname' => 'required ',
        ]);


        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator->errors());
        }

        $user = User::firstOrCreate(
            [
                'username' => $username,
                'email' => $email
            ],
            [
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
            ]
        );

        return view('login.login', ['user' => $user]);
    }


}
