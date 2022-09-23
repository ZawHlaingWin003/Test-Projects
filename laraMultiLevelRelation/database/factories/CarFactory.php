<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(12),
            'model' => $this->faker->date('Y'),
            'make' => $this->faker->numberBetween(1, 10),
            'player'=> $this->faker->numberBetween(1, 10),
        ];
    }
}
