<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdressSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('adresses')->insert([
            'pais' => 'Chile',
            'ciudad' => 'Antofagasta',
            'comuna' => 'Antofagasta',
            'calle' => 'Calle Falsa',
            'numero' => '123',
            'user_id' => '1'
        ]);

        DB::table('adresses')->insert([
            'pais' => 'Chilee',
            'ciudad' => 'Antofagastaa',
            'comuna' => 'Antofagastaa',
            'calle' => 'Calle Falsaa',
            'numero' => '1232',
            'user_id' => '1'
        ]);
    }
}
