<?php

use App\Listing;
use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    public function run()
    {
        Listing::create([
            'list_name'=>'ABC',
            'address'=>'Gombak',
            'latitude'=>40.3,
            'longitude'=>56.3,
            'submitter_id'=>'1',
        ]);

    }
}