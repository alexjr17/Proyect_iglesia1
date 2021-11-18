<?php

namespace Database\Factories;

use App\Models\Ofrenda;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfrendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ofrenda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'recaudo' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'user_id' => User::all()->random()->id
        ];
    }
}
