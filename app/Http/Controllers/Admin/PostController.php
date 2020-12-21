<?php

namespace App\Http\Controllers\Admin;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $tags  = Tag::all();
    //     $categories  = Category::all();
    //     return view('admin.posts.create', compact('categories', 'tags'));

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);

       
        $post = Post::create([
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '_'),
            
            ]);
        return redirect()->route('admin.post.edit', $post);
    }
 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        $tags  = Tag::all();
        $categories  = Category::all();
        return view('admin.posts.edit', compact('categories', 'tags', 'post'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post, Request $request)
    {
        
        //Validacion
        $this->validate($request, [
            'title' => 'required|max:50',
            'body' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'excerpt' => 'required',
            'published_at' => 'date|nullable',
        ]);
       
        //Guardado
    
        
        $post->title = $request->title;
        $post->slug = Str::slug($request->title, '_');
        $post->body = $request->body;
        $post->excerpt = $request->excerpt;
        $post->published_at = isset($request->published_at) ? Carbon::parse($request->published_at) : null;
        $post->category_id = $request->category;
        
        
        if ($post->save()) {
            //Etiquetas
            $post->tags()->sync($request->get('tags'));

            return redirect()->route('admin.post.edit', $post)->with('flash', 'Tu publicación ha sido guardada');

        }
            return redirect()->route('admin.post.edit', $post)->with('flash', 'No se ha podido guardar la publicación');
        

        
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
