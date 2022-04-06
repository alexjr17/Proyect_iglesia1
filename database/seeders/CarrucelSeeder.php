<?php

namespace Database\Seeders;

use App\Models\Carrucel;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;

class CarrucelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrucel = Carrucel::create([
            'title' => 'titulo 1',
            'descripcion' => 'contenido 1',
            'user_id' => User::all()->random()->id
        ]);
        $carrucel->image()->create([
            'url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60',
            'imageable_id' => $carrucel->id,
            'Imageable_type' => Carrucel::class
        ]);
        // $carrucels = Carrucel::factory(5)->create();

        // foreach ($carrucels as $carrucel) {
        //     Image::factory(1)->create([
        //         'imageable_id' => $carrucel->id,
        //         'Imageable_type' => Carrucel::class
        //     ]);
        // }
        
    }
}
