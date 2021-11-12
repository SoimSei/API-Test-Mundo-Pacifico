<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincias;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = now();

        $provincias = [
            ['Arica', 1],
            ['Parinacota', 1],
            ['Iquique', 2],
            ['Tamarugal', 2],
            ['Antofagasta', 3],
            ['El Loa', 3],
            ['Tocopilla', 3],
            ['Copiapó', 4],
            ['Chañaral', 4],
            ['Huasco', 4],
            ['Elqui', 5],
            ['Choapa', 5],
            ['Limarí', 5],
            ['Valparaíso', 6],
            ['Isla De Pascua', 6],
            ['Los Andes', 6],
            ['Petorca', 6],
            ['Quillota', 6],
            ['San Antonio', 6],
            ['San Felipe', 6],
            ['Marga Marga', 6],
            ['Santiago', 7],
            ['Cordillera', 7],
            ['Chacabuco', 7],
            ['Maipo', 7],
            ['Melipilla', 7],
            ['Talagante', 7],
            ['Cachapoal', 8],
            ['Cardenal Caro', 8],
            ['Colchagua', 8],
            ['Talca', 9],
            ['Cauquenes', 9],
            ['Curicó', 9],
            ['Linares', 9],
            ['Diguillín', 10],
            ['Itata', 10],
            ['Punilla', 10],
            ['Concepción', 11],
            ['Arauco', 11],
            ['Bío-Bío', 11],
            ['Cautín', 12],
            ['Malleco', 12],
            ['Valdivia', 13],
            ['Ranco', 13],
            ['Llanquihue', 14],
            ['Chiloé', 14],
            ['Osorno', 14],
            ['Palena', 14],
            ['Coihayque', 15],
            ['Aisén', 15],
            ['Capitán Prat', 15],
            ['General Carrera', 15],
            ['Magallanes', 16],
            ['Antártica Chilena', 16],
            ['Tierra del Fuego', 16],
            ['Última Esperanza', 16],
        ];

        $provincias = array_map(function ($provincias) use ($now) {
            return [
                'nombreProvincia' => $provincias[0],
                'idRegion' => $provincias[1],
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $provincias);

        Provincias::insert($provincias);
    }
}
