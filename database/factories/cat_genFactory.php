<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class cat_genFactory extends Factory
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
            'cat_id' => category::factory(),
            'gen_id' => genre::factory(),
        ];
    }
}
