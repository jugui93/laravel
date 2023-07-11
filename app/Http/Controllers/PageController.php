<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {   
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
        ->latest()->paginate();
        return view('home',['posts'=>$posts]);
    }
    // public function blog()
    // {
    //     //consulta a base de datos
    //     // $posts = Post::get();
    //     // $post = Post::first();
    //     // $post = Post::find(25);

    //     // dd($post);

    //     $posts = Post::latest()->paginate();

    //     return view('blog',['posts'=>$posts]);
    // }
    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
