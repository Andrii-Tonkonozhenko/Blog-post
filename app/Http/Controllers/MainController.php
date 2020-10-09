<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function posts()
    {
        return view('posts', ['blogPosts' => BlogPost::all()]);
    }

    public function blog_post()
    {
        return view('blog_post');
    }

    public function blog_post_check(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|min:4|max:100',
            'message' => 'required|min:10|max:500'
        ]);

        $blogPost = new BlogPost();
        $blogPost->title = $request->input('title');
        $blogPost->message = $request->input('message');

        $blogPost->save();

        return redirect()->route('posts');
    }
}
