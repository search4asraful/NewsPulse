<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'TECHNOLOGY',
            'slug' => 'Technology',
        ]);

        Category::create([
            'name' => 'MEDICAL',
            'slug' => 'Medical',
        ]);

        Category::create([
            'name' => 'SPORTS',
            'slug' => 'Sports',
        ]);
    }
}
