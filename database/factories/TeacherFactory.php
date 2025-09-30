<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = Teacher::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nip' => $this->faker->unique()->numerify('NIP#####'),
            'gender' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
