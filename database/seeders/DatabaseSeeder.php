<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\genre;
use App\Models\tag;
use App\Models\cat_gen;
use App\Models\post;
use App\Models\post_tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        category::insert([
            [
                'cat_id' => '1',
                'cat_slag' => 'travel',
                'cat_name' => '旅行',
            ],
            [
                'cat_id' => '2',
                'cat_slag' => 'programming',
                'cat_name' => 'プログラミング',
            ],
            [
                'cat_id' => '3',
                'cat_slag' => 'games',
                'cat_name' => 'ゲーム',
            ],
            [
                'cat_id' => '4',
                'cat_slag' => 'others',
                'cat_name' => 'その他',
            ]
        ]);
        genre::insert([
            [
                'gen_id' => '1',
                'gen_slag' => 'nagano',
                'gen_name' => '長野',
            ],
            [
                'gen_id' => '2',
                'gen_slag' => 'shizuoka',
                'gen_name' => '静岡',
            ],
            [
                'gen_id' => '3',
                'gen_slag' => 'domestic',
                'gen_name' => 'その他国内',
            ],
            [
                'gen_id' => '4',
                'gen_slag' => 'php',
                'gen_name' => 'PHP',
            ],
            [
                'gen_id' => '5',
                'gen_slag' => 'python',
                'gen_name' => 'Python',
            ],
            [
                'gen_id' => '6',
                'gen_slag' => 'imas',
                'gen_name' => 'アイドルマスター',
            ],
            [
                'gen_id' => '7',
                'gen_slag' => 'ongeki',
                'gen_name' => 'オンゲキ',
            ],
            [
                'gen_id' => '8',
                'gen_slag' => 'valorant',
                'gen_name' => 'VALORANT',
            ],
            [
                'gen_id' => '9',
                'gen_slag' => 'minecraft',
                'gen_name' => 'Minecraft',
            ],
            [
                'gen_id' => '10',
                'gen_slag' => 'others',
                'gen_name' => 'その他',
            ],
        ]);
        tag::factory(10)->create();
        cat_gen::insert([
            [
                'cat_id' => '1',
                'gen_id' => '1'
            ],
            [
                'cat_id' => '1',
                'gen_id' => '2'
            ],
            [
                'cat_id' => '1',
                'gen_id' => '3'
            ],
            [
                'cat_id' => '2',
                'gen_id' => '4'
            ],
            [
                'cat_id' => '2',
                'gen_id' => '5'
            ],
            [
                'cat_id' => '3',
                'gen_id' => '6'
            ],
            [
                'cat_id' => '3',
                'gen_id' => '7'
            ],
            [
                'cat_id' => '3',
                'gen_id' => '8'
            ],
            [
                'cat_id' => '3',
                'gen_id' => '9'
            ],
            [
                'cat_id' => '4',
                'gen_id' => '10'
            ],
        ]);
        post::factory(3)->make([
            'post_stats' => 'private'
        ]);
        post_tag::factory(3)->create();
    }
}
