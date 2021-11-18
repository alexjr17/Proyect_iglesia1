<?php

namespace Database\Factories;

use App\Models\Gasto;
use App\Models\Proposito;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class GastoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gasto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monto' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'detalle' => $this->faker->sentence(),
            'user_id' => User::all()->random()->id,
            'proposito_id' => Proposito::all()->random()->id
        ];
    }
}
