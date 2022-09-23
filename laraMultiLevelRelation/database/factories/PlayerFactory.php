<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(25),
            'height' => $this->faker->numberBetween(5, 7),
            'income' => $this->faker->numberBetween(400000, 900000),
            'suburb' => $this->faker->numberBetween(1, 10),
            'contactDetails' => $this->faker->text(150),
        ];
    }
}
