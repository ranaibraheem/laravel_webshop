<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'machines',
            'beans',
            'cups'
        ];

        foreach ($categories as $category) {
            \App\Models\ProductCategory::create([
                'name'  => $category,
            ]);
        }
    }
}
