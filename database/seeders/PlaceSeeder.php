<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            'name' => 'LIMA',
            'address' => 'JR. AREQUIPA 655'
        ]);

        Place::create([
            'name' => 'HUANCAYO',
            'address' => 'JR. AREQUIPA 655'
        ]);

        Place::create([
            'name' => 'SAN RAMON',
            'address' => 'JR. AREQUIPA 655'
        ]);

        Place::create([
            'name' => 'PASCO',
            'address' => 'JR. AREQUIPA 655'
        ]);

        Place::create([
            'name' => 'HUANCAVELICA',
            'address' => 'JR. AREQUIPA 655'
        ]);
    }
}
