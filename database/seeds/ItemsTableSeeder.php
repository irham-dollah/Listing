<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'name'=>'Keropok',
            'price'=>4.30,
            'quantity'=>50,
            'category'=>'Jajan',
            'minimum_no'=>10,
        ]);
    }
}