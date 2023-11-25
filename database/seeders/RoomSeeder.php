<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Room::create([
           'name' => 'MODULO 1',
            'color' => 'AMARILLO'
        ]);

        Room::create([
            'name' => 'MODULO 2',
            'color' => 'VERDE'
        ]);

        Room::create([
            'name' => 'MODULO 3',
            'color' => 'AZUL'
        ]);

        Room::create([
            'name' => 'MODULO 4',
            'color' => 'NARANJA'
        ]);

    }
}
