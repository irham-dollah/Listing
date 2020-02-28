<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1234567'),
            'type'=>'a'
        ]);
        User::create([
            'name'=>'Member',
            'email'=>'member@gmail.com',
            'password'=>bcrypt('12345678'),
            'type'=>'u'
        ]);
    }
}