<?php

namespace Database\Factories\Quest;

use App\Models\Player\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestFactory extends Factory
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
            'player_id' => Player::inRandomOrder()->first()->id,    //inRandomOrder() : 라라벨의 함수, 만들어진 'Player'를 다 섞고, 그 중 첫번째를 id에 심는다.
        ];
    }
}
