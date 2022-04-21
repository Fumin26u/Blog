<?php

namespace Database\Factories;

use App\Models\genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class postFactory extends Factory
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
            // post_id is A_I
            'post_slag' => $this->faker->text(12),
            'gen_id' => genre::factory(),
            'post_title' => $this->faker->realText(10, 5),
            'post_author' => $this->faker->name(),
            'post_content' => $this->faker->realText(),
            'post_stats' => $this->text,
            'watch_count' => $this->faker->randomNumber(2),
            'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
