<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $samara = City::create([
            'name' => 'Самара',
            'active' => true,
        ]);

        $orenbyrg = City::create([
            'name' => 'Оренбург',
            'active' => true,
        ]);
    }
}
