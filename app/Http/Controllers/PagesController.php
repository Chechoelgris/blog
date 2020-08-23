<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog()
    {
        $posts = \App\Post::latest('published_at')->get();
        $categories = \App\Category::all();

        return view('blog/blog', compact('posts'), compact('categories'));
    }


    public function wellcome()
    {
        return view('welcome');
    }

    public function admin()
    {
        return view('admin/dashboard');
    }
}
