<?php

namespace Database\Seeders;

use App\Models\Fua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fua::create([
            'serie' => 1
        ]);
    }
}
