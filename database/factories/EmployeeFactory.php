<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => $this->faker->name(),
            'age' => $this->faker->userAgent(),
            'phone' => $this->faker->phoneNumber(),
            'photo' => $this->faker->image(),
            'team_id' => $this->faker->city(),
            'role_id' => $this->faker->state(),
            'is_verified' => $this->faker->city(),
            'verified_at' => $this->faker->state(),
        ];
    }
}
