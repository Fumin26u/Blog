<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    //
    public function index(Request $request) {
        $sitemap = App::make('sitemap');

        // topページ
        $sitemap->add(URL::to('/'), now(), '1.0', 'always');

        // URLの生成
        $posts = Post::query()->orderBy('updated_at', 'desc')->get();
        foreach ($posts as $post) {
            $sitemap->add(route('show/', compact('post')), $post->updated_at, '0.8', 'monthly');
        }

        return $sitemap->store('xml', 'public');
    }
}
