<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecentPostController extends Controller
{
    //
    public function index() {
        $recentPosts = DB::table('posts')
            ->select('post_id', 'post_slag', 'post_title')
            ->where('post_stats', 'public')
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

            // dd($recentPosts);

        return view('/index', compact('recentPosts'));
    }
}
