<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(rand(3, 5), true),
            'description' => $this->faker->text,
            'created_at' => now(),
        ];
    }
}
