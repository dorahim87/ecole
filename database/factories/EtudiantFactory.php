<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;
use App\Models\User;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ville = Ville::inRandomOrder()->first(); // récupérer une ville au hasard

        return [
            'nom' => $this->faker->lastName,
            'adresse' => $this->faker->address,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'date_de_naissance' => $this->faker->date(),
            'ville_id' => $ville->id,
            'user_id' => User::factory()->create()->id
        ];
    }
}

