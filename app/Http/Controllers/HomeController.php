<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\Post;


class HomeController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('homepage.homepage', ['name'=>'lecongnam']);
    }
}
