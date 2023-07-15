<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->word(),
            "file_name" => NULL,
            "description" => $this->faker->optional()->sentence(),
            "color" => $this->faker->hexColor(),
            "subject_id" => \App\Models\Subject::factory(),
            
        ];
    }
}
