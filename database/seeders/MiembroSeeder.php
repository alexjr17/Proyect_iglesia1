<?php

namespace Database\Seeders;

use App\Models\Bautizo;
use App\Models\Image;
use App\Models\Miembro;
use Illuminate\Database\Seeder;

class MiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $miembros = Miembro::factory(10)->create();

        foreach ($miembros as $miembro) {
            
            Image::factory(1)->create([
                'imageable_id' => $miembro->id,
                'Imageable_type' => Miembro::class
            ]);
            if ($miembro->bautizo == 'Si') {
                Bautizo::factory(1)->create([
                    'bautizoable_id' => $miembro->id,
                    'bautizoable_type' => Miembro::class
                ]);
            }     
        }
    }
}
