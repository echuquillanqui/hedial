<?php

namespace Database\Seeders;

use App\Models\Turn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Turn::create([
            'name' => '1'
        ]);

        Turn::create([
            'name' => '2'
        ]);

        Turn::create([
            'name' => '3'
        ]);

        Turn::create([
            'name' => '4'
        ]);
    }
}
