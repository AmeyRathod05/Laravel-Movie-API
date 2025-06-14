<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'The ' . $this->faker->unique()->words(rand(1, 3), true),
            $this->faker->unique()->city . ' ' . $this->faker->randomElement(['Adventure', 'Mystery', 'Journey', 'Chronicles']),
            $this->faker->unique()->firstName . '\'s ' . $this->faker->randomElement(['Dream', 'Story', 'Legacy', 'Return']),
        ];
        
        $directors = [
            $this->faker->name,
            $this->faker->firstName . ' ' . $this->faker->lastName,
            $this->faker->firstName . ' ' . $this->faker->lastName . ' ' . $this->faker->lastName,
        ];

        return [
            'title' => $this->faker->randomElement($titles),
            'director' => $this->faker->randomElement($directors),
            'year' => $this->faker->numberBetween(1970, date('Y') + 1),
            'genre_id' => null,
            'created_at' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }

    /**
     * Set a specific year for the movie.
     *
     * @param int $year
     * @return static
     */
    public function year(int $year): static
    {
        return $this->state(fn (array $attributes) => [
            'year' => $year,
        ]);
    }

    /**
     * Set a specific director for the movie.
     *
     * @param string $director
     * @return static
     */
    public function director(string $director): static
    {
        return $this->state(fn (array $attributes) => [
            'director' => $director,
        ]);
    }
}
