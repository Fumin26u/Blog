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
        // dd($request);
        $req_key = array_keys($request->query())[0];
        $req_value = array_values($request->query())[0];

        if ($req_key === '_token') {
            $req_key = array_keys($request->query())[1];
            $req_value = array_values($request->query())[1];
        }

        if ($req_key === 'category') {

            $posts = DB::table('posts')
                ->join('cat_gen', 'posts.gen_id', '=', 'cat_gen.gen_id')
                ->join('categories', 'cat_gen.cat_id', '=', 'categories.cat_id')
                ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
                ->where('categories.cat_slag', '=', $req_value)
                ->get();

        } else if ($req_key === 'genre') {

            $posts = DB::table('posts')
                ->join('genres', 'posts.gen_id', '=', 'genres.gen_id')
                ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
                ->where('genres.gen_id', '=', $req_value)
                ->get();

        } else if ($req_key === 'search') {

            $posts = DB::table('posts')
            ->select('post_id', 'post_slag', 'post_title', 'post_desc', 'ogp', 'created_at', 'updated_at')
            ->where('post_content', 'like', '%' . $req_value . '%')
            ->get();

        }


        dd($posts);
        return view('search/index', compact('posts'));
    }
}
