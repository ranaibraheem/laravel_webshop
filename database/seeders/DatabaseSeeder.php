<?php

namespace Database\Seeders;

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
      $this->call(PaymentMethodSeeder::class);
      $this->call(ProductCategorySeeder::class);
      // $this->call(ProductDiscountSeeder::class);
      $this->call(ProductHasCategorySeeder::class);
      // $this->call(ProductHasDiscountSeeder::class);
      $this->call(ProductMediaSeeder::class);
      $this->call(ProductSeeder::class);
      $this->call(ProductStockSeeder::class);
      $this->call(UserAddressSeeder::class);
      $this->call(UserOrderSeeder::class);
      $this->call(UserPhonesSeeder::class);
      $this->call(UserSeeder::class);
    }
}
