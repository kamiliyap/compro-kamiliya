<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Technology',
            'Health',
            'Lifestyle',
            'Education',
            'Entertainment',
        ];

        foreach ($categories as $key => $value) {
            Categories::create([
                'name' => $value,
                'slug' => Str::slug($value),
            ]);
        }
    }
}
