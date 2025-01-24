<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'description' => fake()->paragraph,
            'salary' => fake()->numberBetween(5_000,150_000),
            'location' => fake()->city,
            'category' => fake()->randomElement(Vacancy::$category),
            'experience' => fake()->randomElement(Vacancy::$experience)
        ];
    }
}
