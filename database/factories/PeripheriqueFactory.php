<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\peripherique>
 */
class PeripheriqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_serie' => $this->faker->unique()->numerify('S-######'),
            'nom' => $this->faker->word(),
            'type' => $this->faker->randomElement(['keyboard', 'mouse', 'monitor', 'printer']),
            'sous_famille' => $this->faker->randomElement(['input', 'output', 'storage']),
            'description' => $this->faker->text(300),
            'interface' => $this->faker->randomElement(['USB', 'Bluetooth', 'HDMI', 'Ethernet']),
            'etat' => $this->faker->randomElement(['actif', 'inactif', 'en maintenance']),
            'user_id' => \App\Models\User::factory(), // Assuming you have a User factory
            
        ];
    }
}
