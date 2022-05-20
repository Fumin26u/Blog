<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class genreFactory extends Factory
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
            // gen_id is A_I
            'gen_slag' => $this->faker->text(8),
            'gen_name' => $this->faker->text(8),
        ];
    }
}
