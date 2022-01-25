<?php

namespace Database\Factories\Client;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [        // 하단 코드는 팩토리가 지정해준 방법임. / 이렇게 하면 Client 1개를 만들 수 있는 것.
            'content' => $this->faker->paragraph,
            'title' => $this->faker->title,
        ];
    }
}
