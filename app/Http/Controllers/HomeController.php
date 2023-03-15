<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;


class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all();

        if (Auth::user()) {
            $user = Auth::user()->username;
             return view('homepage.homepage', ['user' => $user]);
        }else{
            return view('homepage.homepage');
        }

    }
}
