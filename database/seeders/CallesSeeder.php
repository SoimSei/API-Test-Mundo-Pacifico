<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\calles;

class callesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $calles = [
            ['Calle Siempre Viva 123', 1],
            ['Calle Corazon de Melón 312', 108],
            ['Calle Falsa 234', 124],
            ['Calle Hola 923', 149],
            ['Calle Nueva 823', 220],
            ['Calle Ellac 237', 219],
        ];

        $calles = array_map(function ($calle) use ($now) {
            return [
                'idCiudad' => $calle[1],
                'nombreCalle' => $calle[0],
                'updated_at' => $now,
                'created_at' => $now,
            ];
        }, $calles);

        calles::insert($calles);
    }
}
