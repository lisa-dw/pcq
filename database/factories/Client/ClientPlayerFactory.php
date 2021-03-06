<?php

namespace Database\Factories\Client;

use App\Models\Client\Client;
use App\Models\Player\Player;
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
            'client_id' => Client::inRandomOrder()->first()->id,
            'player_id' => Player::inRandomOrder()->first()->id,
        ];
    }
}
