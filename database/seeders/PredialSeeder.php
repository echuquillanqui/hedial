<?php

namespace Database\Seeders;

use App\Models\Predial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PredialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Predial::create([
            'patient_id' => 1,
            'hcl' => '1',
            'covid' => 'NO',
            'dry_weight' => '68',
            'access1' => 'FAV',
            'access2' => 'FAV',
            'frequency' => 1,
            'hour_hd' => '3.5',
            'filter' => '1.9',
        ]);

        Predial::create([
            'patient_id' => 2,
            'hcl' => '2',
            'covid' => 'NO',
            'dry_weight' => '52',
            'access1' => 'CCVP',
            'access2' => 'CCVP',
            'frequency' => 1,
            'hour_hd' => '3.25',
            'filter' => '2.1',
        ]);

        Predial::create([
            'patient_id' => 3,
            'hcl' => '3',
            'covid' => 'NO',
            'dry_weight' => '74',
            'access1' => 'CCVLP',
            'access2' => 'CCVLP',
            'frequency' => 1,
            'hour_hd' => '3.75',
            'filter' => '1.4',
        ]);
    }
}
