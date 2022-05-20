<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Post_Tag;
use App\Models\Cat_Gen;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // Eloquent
        // $articles = Post::all();

        // Query Builder
        $articles = DB::table('posts')
        ->select('post_id', 'post_slag', 'post_title', 'post_content', 'created_at', 'updated_at')
        ->get();

        // dd($articles);
        return view('articles/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles/create');
    }

    /**
     * Get genre list for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showGenres()
    {
        //
        $genres = DB::table('genres')
        ->get();

        return view('articles/create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $post = new Post;

        $post->post_slag = $request->input('slag');
        $post->gen_id = 1;
        $post->post_title = $request->input('title');
        $post->post_author = 'fumiya';
        $post->post_content = $request->input('content');
        $post->post_stats = $request->input('stats');
        $post->watch_count = 0;

        $post->save();

        return redirect('articles/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        // dump($post);

        return view('show/index', compact('post'));
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
        $post = Post::find($id);
        // dd($post);

        return view('articles/edit', compact('post'));
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
        $post = Post::find($id);

        $post->post_slag = $request->input('slag');
        $post->gen_id = 1;
        $post->post_title = $request->input('title');
        $post->post_author = 'fumiya';
        $post->post_content = $request->input('content');
        $post->post_stats = $request->input('stats');
        $post->watch_count = 0;

        $post->save();

        return redirect('articles/index');
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
        $post = Post::find($id);
        $post->delete();

        return redirect('articles/index');
    }
}
