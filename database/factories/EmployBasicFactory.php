<?php

namespace Database\Factories;

use App\Models\EmployBasic;
use App\Models\Role;
use App\Models\Blood;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployBasic>
 */
class EmployBasicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role_id' => null,
            'name_en' => $this->faker->name,
            'name_bn' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contact_no_en' => $this->faker->phoneNumber,
            'contact_no_bn' => $this->faker->phoneNumber,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birth_date' => $this->faker->date,
            
            'image' => 'default_image.jpg', // Assuming you have a default image
            'present_address' => $this->faker->address,
            'permanent_address' => $this->faker->address,
            'status' => $this->faker->randomElement([0, 1]),
            'created_by' => 1, // Replace with the actual user ID
            'updated_by' => 1, // Replace with the actual user ID
        ];
    }
}
