<?php

namespace Database\Factories;

use App\Models\Miembro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MiembroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Miembro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name= $this->faker->firstName();
        $apellido= $this->faker->lastName();
        return [
            'nombre' => $name,
            'apellido' => $apellido,
            'slug' => Str::slug($name. ' ' .$apellido),
            'cedula' => $this->faker->isbn10(),
            'correo' => $this->faker->email(),
            'telefono' => $this->faker->e164PhoneNumber(),
            'direccion' => $this->faker->streetAddress(),
            'ciudad' => $this->faker->city(),
            'bautizo' => $this->faker->randomElement(['Si', 'No']),
            'user_id' => User::all()->random()->id
        ];
    }
}
