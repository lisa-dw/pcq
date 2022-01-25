<?php

namespace Database\Factories\Client;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientPlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'title' => $this->faker->title,
        ];
    }
}
