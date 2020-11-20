<?php

namespace Database\Factories;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimeFactory extends Factory
{
    protected $model = Anime::class;

    public function definition()
    {
        return[
            'name' => $this->faker->word,
            'description' => $this->faker->text($maxNbChars = 1000),
            'release_date' => $this->faker->date,
            'season' => $this->faker->word
        ];
    }
}