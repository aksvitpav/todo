<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
        'name' => 'User1',
        'email' => 'user1@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
        ],
        [
        'name' => 'User2',
        'email' => 'user2@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('12345678'),
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
        ]
        ]);
    }
}
