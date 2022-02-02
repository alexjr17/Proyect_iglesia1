<?php

namespace Database\Factories;

use App\Models\Evento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fecha= $this->faker->date($format = 'Y-m-d', $max = 'now');
        return [
            'title' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'start' => $fecha,
            'end' => $fecha
        ];
    }
}
