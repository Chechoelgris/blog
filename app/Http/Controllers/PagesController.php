<?php


namespace App\Http\Controllers;


use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function blog()
    {
       

        $posts = Post::published()->get();

        $categories = Category::all();

        #return view('blog/blog', compact('posts'), compact('categories')); //Blog Materialize
        return view('zendero/blog', compact('posts'), compact('categories')); //Blog Zendero curso
    }


    public function wellcome()
    {
        return view('majime');
    }

    public function admin()
    {
        return view('admin/dashboard');
    }
}
