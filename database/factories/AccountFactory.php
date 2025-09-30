<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => $this->faker->randomElement(['admin', 'seller', 'buyer']),
            'password' => bcrypt('password'),
            'student_id' => $this->faker->boolean() ? Student::inRandomOrder()->first()->id : null,
            'teacher_id' => $this->faker->boolean() ? Teacher::inRandomOrder()->first()->id : null,
        ];
    }
}
