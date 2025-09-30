<?php

namespace Database\Factories;

use App\Models\Buyer;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerFactory extends Factory
{
    protected $model = Buyer::class;

    public function definition(): array
    {
        return [
            'phone_number' => $this->faker->unique()->phoneNumber(),
            'student_id' => $this->faker->boolean() ? Student::inRandomOrder()->first()->id : null,
            'teacher_id' => $this->faker->boolean() ? Teacher::inRandomOrder()->first()->id : null,
            'account_id' => Account::factory(),
        ];
    }
}
