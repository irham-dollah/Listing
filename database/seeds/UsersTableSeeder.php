<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Super Admin',
            'matric_no'=>'1527693',
            'password'=>bcrypt('Aidi16320'),
            'type'=>'super_admin'
        ]);
    }
}