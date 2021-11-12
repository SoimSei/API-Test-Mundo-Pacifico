<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Regiones;

class RegionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $regiones = [
            'Arica y Parinacota',
            'Tarapacá',
            'Antofagasta',
            'Atacama',
            'Coquimbo',
            'Valparaiso',
            'Metropolitana de Santiago',
            'Libertador General Bernardo O\'Higgins',
            'Maule',
            'Ñuble',
            'Biobío',
            'La Araucanía',
            'Los Ríos',
            'Los Lagos',
            'Aisén del General Carlos Ibáñez del Campo',
            'Magallanes y de la Antártica Chilena'
        ];

        $regiones = array_map(function ($region) use ($now) {
            return [
                'nombreRegion' => $region,
                'updated_at' => $now,
                'created_at' => $now,
            ];
        }, $regiones);

        Regiones::insert($regiones);
    }
}
