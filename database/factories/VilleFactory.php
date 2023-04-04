<?php 

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;
use App\Models\Ville;

class VilleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $faker = Faker::create();

        return [
            'nom' => $faker->unique()->city,
        ];
    }
}
