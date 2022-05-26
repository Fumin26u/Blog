<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchArticlesController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        // Eloquent
        // $articles = Post::all();
        dd($request);

        // Query Builder
        $articles = DB::table('posts')
        ->select('post_id', 'post_slag', 'post_title', 'post_content', 'created_at', 'updated_at')
        ->get();

        // dd($articles);
        return view('search/index', compact('articles'));
    }
}
