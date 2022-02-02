<?php

namespace Database\Factories;

use App\Models\Carrucel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarrucelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carrucel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'user_id' => User::all()->random()->id
        ];
    }
}
