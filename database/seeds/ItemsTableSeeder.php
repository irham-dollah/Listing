<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        Item::create([
            'id'=>'8850100002976',
            'name'=>'Mineral Water',
            'buying_price'=>0.80,
            'selling_price'=>1.00,
            'quantity'=>50,
            'category'=>'beverage',
            'minimum_no'=>10,
        ]);
    }
}