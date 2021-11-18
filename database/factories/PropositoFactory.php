<?php

namespace Database\Factories;

use App\Models\Proposito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PropositoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proposito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre = $this->faker->word();
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre)
        ];
    }
}
