<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class categoryFactory extends Factory
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
            // cat_id is A_I
            'cat_name' => $this->faker->text(8),
        ];
    }
}
