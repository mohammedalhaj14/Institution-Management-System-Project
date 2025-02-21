<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fName' => $this->faker->firstName,
            'lName' => $this->faker->lastName,
            'phone' => $this->faker->unique()->regexify('[0-9]{8}'), // Generates an 8-digit phone number
            'email' => $this->faker->unique()->safeEmail,
            'username' => $this->faker->unique()->userName,
            'password' => bcrypt('password'), // Default password
            'role' => 'student',
            'genderID' => $this->faker->numberBetween(1, 2), // Assuming genders table has IDs 1 (Male) and 2 (Female)
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the user's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
