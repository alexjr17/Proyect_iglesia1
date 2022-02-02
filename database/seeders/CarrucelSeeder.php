<?php

namespace Database\Seeders;

use App\Models\Carrucel;
use App\Models\Image;
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
        $carrucels = Carrucel::factory(3)->create();

        foreach ($carrucels as $carrucel) {
            Image::factory(1)->create([
                'imageable_id' => $carrucel->id,
                'Imageable_type' => Carrucel::class
            ]);
        }
        
    }
}
