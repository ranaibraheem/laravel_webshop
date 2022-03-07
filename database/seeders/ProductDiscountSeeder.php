<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $discounts = [
                'onsale30',
                'onsale50',
            ];
    
            foreach ($discounts as $discount) {
                \App\Models\ProductDiscount::create([
                    'name'  => $discount,
                ]);
            }
        }
    }
}
