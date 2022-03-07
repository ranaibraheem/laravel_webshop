<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_stock')->insert([
            'id'            => 1, 
            'stock'         => 10,
            'quantity'      => 0,
            'created_at'    => now(),
            'created_by'    => 1, 
            ]);
    
        DB::table('product_stock')->insert([
            'id'            => 2, 
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
            ]);

        DB::table('product_stock')->insert([
            'id'            => 3, 
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 4, 
            'stock'         => 12,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 5, 
            'stock'         => 25,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 6, 
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 7, 
            'stock'         => 0,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 8, 
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 9, 
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 10, 
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 11, 
            'stock'         => 15,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 12, 
            'stock'         => 12,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 13, 
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 14, 
            'stock'         => 10,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 15, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 16, 
            'stock'         => 43,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 17, 
            'stock'         => 16,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 18, 
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 19, 
            'stock'         => 18,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 20, 
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 21, 
            'stock'         => 11,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 22, 
            'stock'         => 18,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 23, 
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 24, 
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 25, 
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 26, 
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 27, 
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 28, 
            'stock'         => 50,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 29, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 30, 
            'stock'         => 34,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 31, 
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 32, 
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 33, 
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 34, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 35, 
            'stock'         => 17,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 36, 
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 37, 
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 38, 
            'stock'         => 44,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 39, 
            'stock'         => 83,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 40, 
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 41, 
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 42, 
            'stock'         => 58,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stock')->insert([
            'id'            => 43, 
            'stock'         => 45,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stock')->insert([
            'id'            => 44, 
            'stock'         => 56,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stock')->insert([
            'id'            => 45, 
            'stock'         => 54,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stock')->insert([
            'id'            => 46, 
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 47, 
            'stock'         => 120,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 48, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 49, 
            'stock'         => 80,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 50, 
            'stock'         => 10,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 51, 
            'stock'         => 5,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 52, 
            'stock'         => 15,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 53, 
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 54, 
            'stock'         => 11,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 55, 
            'stock'         => 16,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 56, 
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 57, 
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 58, 
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 59, 
            'stock'         => 38,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 60, 
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 61, 
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 62, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 63, 
            'stock'         => 27,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 64, 
            'stock'         => 33,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 65, 
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 66, 
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stock')->insert([
            'id'            => 67, 
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

    }
}
