<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'dateNaissance' => $this->faker->date($max = "2004-01-01"),
            "genre" => $this->faker->randomElement(["Masculin", "Féminin"]),
            "adresse" => $this->faker->city(),
            "telephone" => $this->faker->phoneNumber(),
            "email" => $this->faker->email(),
            "nationalite" => $this->faker->word(),
            "tel_tuteur" => $this->faker->phoneNumber()

        ];
    }
}
