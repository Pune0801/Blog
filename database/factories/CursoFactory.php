<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => fake()->paragraph(),
            'category' => fake()->randomElement(['Desarrollo Web', 'Diseño Web']),

        ];
    }
}
