<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'name'=>'Keropok',
            'price'=>3.20,
            'quantity'=>30,
        ]);
    }
}