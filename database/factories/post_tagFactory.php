<?php

namespace Database\Factories;

use App\Models\tag;
use App\Models\post;
use Illuminate\Database\Eloquent\Factories\Factory;

class post_tagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'post_id' => post::factory(),
            'tag_id' => tag::factory()
        ];
    }
}
