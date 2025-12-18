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
            'sous_famille' => $this->faker->word,
            'designiation_article' => $this->faker->words(3, true),
            'activite' => $this->faker->word,
            'marque' => $this->faker->company,
            'modele' => $this->faker->word,
            'code_onee' => $this->faker->bothify('ON-###??'),
            'numero_serie' => $this->faker->unique()->bothify('SN#######'),
            'nom_affectataire' => $this->faker->name,
            'matricule_affectataire' => $this->faker->numerify('MAT####'),
            'entite' => $this->faker->company,
            'nom_adresse_site' => $this->faker->address,
            'contrat_acquisition' => $this->faker->word,
            'type' => $this->faker->word,
            'num_contrat' => $this->faker->numberBetween(1000, 9999),
            'date_debut_contrat' => $this->faker->date(),
            'annee' => $this->faker->year(),
            'objet' => $this->faker->sentence,
            'titulaire_marche' => $this->faker->company,
            'obs' => $this->faker->sentence,
            'etage' => $this->faker->numberBetween(0, 10),
        ];
    }
}
