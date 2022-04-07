<?php

namespace Database\Seeders;

use App\Models\Bautizo;
use App\Models\Image;
use App\Models\Miembro;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class MiembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $name = 'juan';
        // $apellido = 'mercado';
        // Miembro::create([
        //     'nombre' => $name,
        //     'apellido' => $apellido,
        //     'slug' => Str::slug($name. ' ' .$apellido),
        //     'cedula' => 10000,
        //     'correo' => 'juan@gmail.com',
        //     'telefono' => 30169222,
        //     'direccion' => 'guaranda',
        //     'ciudad' => 'guaranda',
        //     'bautizo' => 'Si',
        //     'user_id' => User::all()->random()->id
        // ]);
        $miembros = Miembro::factory(50)->create();

        // foreach ($miembros as $miembro) {
            
        //     Image::factory(1)->create([
        //         'imageable_id' => $miembro->id,
        //         'Imageable_type' => Miembro::class
        //     ]);
        //     if ($miembro->bautizo == 'Si') {
        //         Bautizo::factory(1)->create([
        //             'bautizoable_id' => $miembro->id,
        //             'bautizoable_type' => Miembro::class
        //         ]);
        //     }     
        // }
    }
}
