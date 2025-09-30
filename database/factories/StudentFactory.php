<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\ClassModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nis' => $this->faker->unique()->numerify('NIS###'),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'class_id' => ClassModel::inRandomOrder()->first()->id, // relasi ke class
        ];
    }
}
