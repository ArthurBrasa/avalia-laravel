<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProfessorFactory extends Factory
{
    /**
     * Define the model's default state.    
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'departamento' => $this->faker->word,
            'professor' => 'professor',
            'email' => $this->faker->unique()->safeEmail,
            'idade' => $this->faker->numberBetween(25, 60),
            'materia' => $this->faker->word,
            'universidade' => $this->faker->company,
            'observacoes' => $this->faker->paragraph,
            
            
        ];
    }
}
