<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'etudiant_id' => Etudiant::factory()->create()->id,
        ];
    }
}