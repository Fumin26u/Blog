<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class tagFactory extends Factory
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
            // tag_id is A_I
            'tag_slag' => $this->faker->text(5),
            'tag_name' => $this->faker->text(5),
        ];
    }
}
