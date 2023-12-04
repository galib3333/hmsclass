<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use App\Models\EmployBasic;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployBasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create employ_basics and corresponding user accounts
        EmployBasic::factory(10)->create()->each(function ($employee) {
            User::factory(1)->create(['employ_id' => $employee->id]);
        }); 
    }
}
