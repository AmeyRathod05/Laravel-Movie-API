<?php

namespace Database\Seeders;

use App\Models\Movie;
use Database\Factories\MovieFactory;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create specific movies with known attributes
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'year' => 1994,
            ],
            [
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'year' => 1972,
            ],
            [
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'year' => 2008,
            ],
            [
                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'year' => 1994,
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'director' => 'Peter Jackson',
                'year' => 2003,
            ]
        ];

        // Create specific movies using the factory
        foreach ($movies as $movie) {
            Movie::factory()->create($movie);
        }

        // Generate 15 random movies using the factory
        Movie::factory()->count(15)->create();
    }
}
