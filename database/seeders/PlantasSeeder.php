<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlantasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plantas')->insert([
            'nombre' => 'Ficus lyrata (Fiddle Leaf Fig)',
            'altura' => '1.5 metros',
            'tipo' => 'Interior',
            'riego' => 'Moderado',
        ]);
    }
}
