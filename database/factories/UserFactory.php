<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\EmployBasic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'employ_id' => EmployBasic::factory(),
            'role_id' => null,
            'name_en' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contact_no_en' => $this->faker->phoneNumber,
            'password' => Hash::make('password'),
            'language' => 'en',
            'full_access' => false,
            'status' => $this->faker->randomElement([1, 0]),
            'created_by' => 1,
            'updated_by' => 1,
            'remember_token' => null, // This is automatically handled by Laravel
        ];
    }
}
