<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDiscount;
use App\Models\ProductHasCategory;
use App\Models\ProductMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(Product::class);
      $this->call(ProductMedia::class);
      $this->call(ProductStock::class);
      $this->call(ProductCategory::class);
      $this->call(ProductDiscount::class);
      $this->call(ProductHasCategory::class);
    }
}
