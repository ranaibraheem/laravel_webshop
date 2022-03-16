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
        DB::table('product_stocks')->insert([
            'id'            => 1,
            'product_id'    => 1,
            'stock'         => 10,
            'quantity'      => 0,
            'created_at'    => now(),
            'created_by'    => 1, 
            ]);
    
        DB::table('product_stocks')->insert([
            'id'            => 2,
            'product_id'    => 2,
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
            ]);

        DB::table('product_stocks')->insert([
            'id'            => 3,
            'product_id'    => 3,
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 4,
            'product_id'    => 4,
            'stock'         => 12,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 5,
            'product_id'    => 5,
            'stock'         => 25,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 6,
            'product_id'    => 6,
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 7,
            'product_id'    => 7,
            'stock'         => 0,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 8,
            'product_id'    => 8,
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 9,
            'product_id'    => 9,
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 10,
            'product_id'    => 10,
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 11,
            'product_id'    => 11,
            'stock'         => 15,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 12,
            'product_id'    => 12,
            'stock'         => 12,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 13,
            'product_id'    => 13,
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 14,
            'product_id'    => 14,
            'stock'         => 10,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 15,
            'product_id'    => 15,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 16,
            'product_id'    => 16,
            'stock'         => 43,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 17,
            'product_id'    => 17,
            'stock'         => 16,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 18,
            'product_id'    => 18,
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 19,
            'product_id'    => 19,
            'stock'         => 18,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 20,
            'product_id'    => 20,
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 21,
            'product_id'    => 21,
            'stock'         => 11,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 22,
            'product_id'    => 22,
            'stock'         => 18,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 23,
            'product_id'    => 23,
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 24,
            'product_id'    => 24,
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 25,
            'product_id'    => 25,
            'stock'         => 8,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 26,
            'product_id'    => 26,
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 27,
            'product_id'    => 27,
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 28,
            'product_id'    => 28,
            'stock'         => 50,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 29,
            'product_id'    => 29,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 30,
            'product_id'    => 30,
            'stock'         => 34,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 31,
            'product_id'    => 31,
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 32,
            'product_id'    => 32,
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 33,
            'product_id'    => 33,
            'stock'         => 9,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 34,
            'product_id'    => 34,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 35,
            'product_id'    => 35,
            'stock'         => 17,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 36,
            'product_id'    => 36,
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 37,
            'product_id'    => 37,
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 38,
            'product_id'    => 38,
            'stock'         => 44,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 39,
            'product_id'    => 39,
            'stock'         => 83,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 40,
            'product_id'    => 40,
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 41,
            'product_id'    => 41,
            'stock'         => 4,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 42,
            'product_id'    => 42,
            'stock'         => 58,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stocks')->insert([
            'id'            => 43,
            'product_id'    => 43,
            'stock'         => 45,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stocks')->insert([
            'id'            => 44,
            'product_id'    => 44,
            'stock'         => 56,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stocks')->insert([
            'id'            => 45,
            'product_id'    => 45,
            'stock'         => 54,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);


        DB::table('product_stocks')->insert([
            'id'            => 46,
            'product_id'    => 46,
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 47,
            'product_id'    => 47,
            'stock'         => 120,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 48,
            'product_id'    => 48,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 49,
            'product_id'    => 49,
            'stock'         => 80,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 50,
            'product_id'    => 50,
            'stock'         => 10,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 51,
            'product_id'    => 51,
            'stock'         => 5,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 52,
            'product_id'    => 52,
            'stock'         => 15,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 53,
            'product_id'    => 53,
            'stock'         => 20,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 54,
            'product_id'    => 54,
            'stock'         => 11,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 55,
            'product_id'    => 55,
            'stock'         => 16,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 56,
            'product_id'    => 56,
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 57,
            'product_id'    => 57,
            'stock'         => 30,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 58,
            'product_id'    => 58,
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 59,
            'product_id'    => 59,
            'stock'         => 38,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 60,
            'product_id'    => 60,
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 61,
            'product_id'    => 61,
            'stock'         => 60,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 62,
            'product_id'    => 62,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 63,
            'product_id'    => 63,
            'stock'         => 27,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 64,
            'product_id'    => 64,
            'stock'         => 33,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 65,
            'product_id'    => 65,
            'stock'         => 3,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 66,
            'product_id'    => 66,
            'stock'         => 22,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

        DB::table('product_stocks')->insert([
            'id'            => 67,
            'product_id'    => 67,
            'stock'         => 2,
            'quantity'      => 0,    
            'created_at'    => now(),
            'created_by'    => 1, 
        ]);

    }
}
