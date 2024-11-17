<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a specific user that matches your phpMyAdmin example
        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'username' => 'test', // Add this if you have a `username` field in your database
            'email_verified_at' => now(), // Replace `now()` with `null` if the user should not be verified
            'password' => Hash::make('test1234'), // Replace 'test1234' with any default password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optionally create additional users with random data using the factory
        User::factory()->count(10)->create();
    }
}
