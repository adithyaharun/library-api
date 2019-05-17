<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id' => (string)Str::uuid(),
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@perpus.com',
                'api_token' => str_random(64),
                'active' => 1
            ]
        ]);
    }
}
