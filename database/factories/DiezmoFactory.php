<?php

namespace Database\Factories;

use App\Models\Diezmo;
use App\Models\Miembro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiezmoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diezmo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monto' => $this->faker->randomNumber($nbDigits = 5, $strict = false),
            'user_id' => User::all()->random()->id,
            'miembro_id' => Miembro::all()->random()->id
        ];
    }
}
