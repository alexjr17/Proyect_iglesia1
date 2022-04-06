<?php

namespace Database\Seeders;

use App\Models\Diezmo;
use App\Models\Evento;
use App\Models\Gasto;
use App\Models\Ofrenda;
use App\Models\Proposito;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $carpeta = 'miembro';
        Storage::disk('public')->deleteDirectory($carpeta);
        Storage::disk('public')->makeDirectory($carpeta);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MiembroSeeder::class);
        $this->call(CarrucelSeeder::class);
        // Ofrenda::factory(10)->create();
        // Proposito::factory(3)->create();
        // Gasto::factory(10)->create();
        // Diezmo::factory(10)->create();
        // Evento::factory(10)->create();

    }
}
