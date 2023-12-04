<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'role_id' => null,
            'employ_id' => null,
            'name_en' => 'John Doe', // Replace with desired name
            'email' => 'john.doe@example.com', // Replace with desired email
            'contact_no_en' => '123456789', // Replace with desired contact number
            'password' => Hash::make('password'), // Replace with desired password
            'created_by' => 1, // Replace with the actual user ID
            'updated_by' => 1, // Replace with the actual user ID
        ]);
    }
}
