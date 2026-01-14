<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory {
    public function definition(): array {
        return [
            'name' => fake()->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'password',
            'is_active' => rand(0, 1),
            'role' => fake()->randomElement(['admin', 'superadmin']),
            'user_id' => 1
        ];
    }
}
