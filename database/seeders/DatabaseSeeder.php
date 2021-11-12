<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RegionesSeeder::class);
        $this->call(ProvinciasSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(CallesSeeder::class);
    }
}
