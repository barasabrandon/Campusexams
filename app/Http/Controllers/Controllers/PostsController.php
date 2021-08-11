<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>[ 'index','show','create', 'store']]);
    }

    /**
     * Display a listing of the resource.(It lists all the posts)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::all();// fetches data from model/database
       $users = User::all();
       $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index')->with(['posts'=>$posts, 'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.(Creates form)
     *
     * @return \Illuminate\Http\Response
     */    
    public function create()
    {
        return view('posts.createchat');

        
    }

    /**
     * Store a newly created resource in storage.(Submits to the database)
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body'  => 'required'
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/chats')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.(Displays a single post)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* 
      public function show($id)
        {
            $post = Post::find($id);
            return view('posts.show')->with('post', $post);
        }
        */
        public function show()
        {
            $posts = Post::all();
            
            return view('posts.show')->with(['posts'=> $posts, 'users' => $users]);
        }

    /**
     * Show the form for editing the specified resource.(Edits the form)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.(Updates the form)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.(Deletes the specified post)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = Post::find($id);
       $post->delete();
       return redirect('/posts')->with('success', 'Post Removed');
    }


    
}
