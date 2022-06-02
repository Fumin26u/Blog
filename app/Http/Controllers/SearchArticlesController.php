<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchArticlesController extends Controller
{
    //
    public function index(Request $request)
    {

        $rq = $request->query();

        $search_words = '';

        if (array_key_exists('category', $rq)) {

            $posts = DB::table('posts')
                ->join('cat_gen', 'posts.gen_id', '=', 'cat_gen.gen_id')
                ->join('categories', 'cat_gen.cat_id', '=', 'categories.cat_id')
                ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
                ->where('categories.cat_slag', '=', $rq['category'])
                ->where('post_stats', 'public')
                ->orderBy('created_at', 'desc')
                ->get();

            $sw = DB::table('categories')
                ->select('cat_name')
                ->where('cat_slag', '=', $rq['category'])
                ->get();
            $search_words = $sw[0]->cat_name;

        } else if (array_key_exists('genre', $rq)) {

            $posts = DB::table('posts')
                ->join('genres', 'posts.gen_id', '=', 'genres.gen_id')
                ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
                ->where('genres.gen_slag', '=', $rq['genre'])
                ->where('post_stats', 'public')
                ->orderBy('created_at', 'desc')
                ->get();

            $sw = DB::table('genres')
                ->select('gen_name')
                ->where('gen_slag', '=', $rq['genre'])
                ->get();
            $search_words = $sw[0]->gen_name;

        } else if (array_key_exists('search', $rq)) {

            $posts = DB::table('posts')
                ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
                ->where('post_content', 'like', '%' . $rq['search'] . '%')
                ->where('post_stats', 'public')
                ->orderBy('created_at', 'desc')
                ->get();

            $search_words = $rq['search'];

        }

        // dd($posts);
        return view('search/index', compact('posts', 'search_words'));
    }
}
