<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paymentMethods = [
            'IDEAL',
            'PayPal',
            'CreditCard',
        ];
        foreach ($paymentMethods as $paymentMethod) {
            \App\Models\PaymentMethod::create([
                'name'          => $paymentMethod,
                'created_by'    => 1,
            ]);
        }
    }
}
