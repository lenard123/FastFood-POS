<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use \App\Enums\UserType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'firstname' => 'Lenard',
        	'lastname' => 'Mangay-ayam',
        	'email' => 'lenard.mangayayam@gmail.com',
        	'password' => Hash::make('lenard0727'),
        	'role' => UserType::ADMINISTRATOR,
        ]);
    }
}
