<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function insertPost(Request $request)
    {
        $category = new Category();
        $categories = Category::all();

        if(!$categories){
            $categories->name = 'default';
            $categories->save();
        }

        $post = new Post();

        $post = Post::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'thumbnail'=> $request->thumbnail,
            'category_id'=> $request->category_id,
            'tags_id'=> $request->tags_id,
            'users_id '=> $request->users_id,
        ]);



    }
}
