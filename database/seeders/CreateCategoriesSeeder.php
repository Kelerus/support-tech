<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = Category::create([
            'name' => 'Общая',
            'active' => true,
        ]);

        $firstLevel = Category::create([
            'name' => '1 уровень',
            'active' => true,
        ]);
    }
}
