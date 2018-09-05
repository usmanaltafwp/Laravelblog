<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Post;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
      return view('admin/posts/index', compact('posts'));
    }

    public function create()
    {
    	return view('admin.posts.create');
    }
    
    public function store(Request $request)
    {
        $fileName = 'null';
        if (Input::file('image')->isValid()) {
            $destinationPath = public_path('uploads');
            $extension = Input::file('image')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;

            Input::file('image')->move($destinationPath, $fileName);
        } 
           $post  = new Post([
            'title'  => $request->get('title'),
            'content'=> $request->get('content'),
            'image'  => $fileName,
            ]);
         $post->save();
         return view('admin/posts/index');
    } 

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin/posts/edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
      
      $post = Post::find($id);
     
       if(!empty($request['image'])){
          if (Input::file('image')->isValid()) {
             //dd($request);
                $destinationPath = public_path('uploads');
                $extension = Input::file('image')->getClientOriginalExtension();
                $fileName = uniqid().'.'.$extension;

                Input::file('image')->move($destinationPath, $fileName);
            }
        }
        $post->title = $request['title'];
        $post->content = $request['content'];
        if(!empty($request['image'])){
            $post->image  = $fileName;
        }
        $post->save();

       return Redirect::to('admin/posts');

    }

}
