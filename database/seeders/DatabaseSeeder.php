<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Predial;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PlaceSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TurnSeeder::class);
        $this->call(FuaSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(PredialSeeder::class);
    }
}
