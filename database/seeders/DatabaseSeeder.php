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
        // category::factory(10)->create();
        // genre::factory(20)->create();
        tag::factory(10)->create();
        // cat_gen::factory(10)->create();
        post::factory(10)->make([
            'post_stats' => 'private'
        ]);
        post_tag::factory(10)->create();
    }
}
