<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Posts;

use Carbon\Carbon;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = DB::table('posts')->orderBy('created_at', 'desc')->get();
        return view('index')->with('allPosts', $allPosts);
    }

     /**
     * Display the specified resource.
     *
     * @param Ist working whene you find using id
     * @return \Illuminate\Http\Response
     */
    // public function show(Posts $post) //Posts::find(wildcard);
    // {
    //     // $post = DB::table('posts')->where('id', $post->id)->get();
    //     return view('theme.post')->with('post', $post);
    // }

    public function show($link)
    {
        $post = DB::table('posts')->where('link', $link)->get();
        return view('theme.post')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.create_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // dd(request()->all());

        $link = strtolower(str_replace(' ', '-', request('title')));

        // Posts::create([

        //     'link' => $link,
        //     'title' => request('title'),
        //     'body' => request('body')

        //     ]);

        $this->validate(request(), [
            'title' => 'required|min:3|max:200',
            'body' => 'required|min:10|max:2000',
            ]);

        return redirect('/posts/create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
