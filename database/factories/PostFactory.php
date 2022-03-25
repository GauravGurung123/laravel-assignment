<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(1),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'image' => $this->faker->randomElement(['free01.png', 'free02.png', 'free03.png']),
            'user_id' => User::all()->random()->id,
        ];
    }
}
