<?php

namespace Database\Factories;

use App\Models\Bautizo;
use Illuminate\Database\Eloquent\Factories\Factory;

class BautizoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bautizo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   
            'fecha' => $this->faker->date($format = 'Y-m-d', $max = 'now')                  
        ];      
    }
}
