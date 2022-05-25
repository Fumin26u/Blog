<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // グローバルヘッダーナビ用のカテゴリ・ジャンルを取得
        // カテゴリの取得
        $cats = DB::table('categories')
            ->select('cat_id', 'cat_slag', 'cat_name')
            ->get();

        $res = [];
        // カテゴリ→該当するジャンル名の配列に変換
        for ($i = 0; $i < count($cats); $i++) {
            $res[$i] = [
                'cat_slag' => $cats[$i]->cat_slag,
                'cat_name' => $cats[$i]->cat_name,
                'genres' => []
            ];

            // 各カテゴリIDに該当するジャンル一覧の取得
            $gens = DB::table('genres')
                ->select('genres.gen_id', 'gen_slag', 'gen_name')
                ->join('cat_gen', 'cat_gen.gen_id', '=', 'genres.gen_id')
                ->where('cat_gen.cat_id', $i+1)
                ->get();

            for($j = 0; $j < count($gens); $j++) {
                $res[$i]['genres'][$j]['gen_slag'] = $gens[$j]->gen_slag;
                $res[$i]['genres'][$j]['gen_name'] = $gens[$j]->gen_name;
            }
        }
        // dd($res);

        view()->share('global_nav', $res);
    }
}
