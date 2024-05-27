<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MoviesTableSeeder extends Seeder
{
    public function run()
    {
        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'director' => 'Frank Darabont',
                'summary' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'genres' => json_encode(['Drama'])
            ],
            [
                'title' => 'The Godfather',
                'director' => 'Francis Ford Coppola',
                'summary' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'genres' => json_encode(['Crime', 'Drama'])
            ],
            [
                'title' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'summary' => 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham.',
                'genres' => json_encode(['Action', 'Crime', 'Drama'])
            ],
            [
                'title' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'summary' => 'The lives of two mob hitmen, a boxer, a gangster, and his wife intertwine in four tales of violence and redemption.',
                'genres' => json_encode(['Crime', 'Drama'])
            ],
            [
                'title' => 'Schindler\'s List',
                'director' => 'Steven Spielberg',
                'summary' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'genres' => json_encode(['Biography', 'Drama', 'History'])
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'director' => 'Peter Jackson',
                'summary' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'genres' => json_encode(['Action', 'Adventure', 'Drama'])
            ],
            [
                'title' => 'Forrest Gump',
                'director' => 'Robert Zemeckis',
                'summary' => 'The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate, and other historical events unfold from the perspective of an Alabama man with an IQ of 75.',
                'genres' => json_encode(['Drama', 'Romance'])
            ],
            [
                'title' => 'Inception',
                'director' => 'Christopher Nolan',
                'summary' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'genres' => json_encode(['Action', 'Adventure', 'Sci-Fi'])
            ],
            [
                'title' => 'Fight Club',
                'director' => 'David Fincher',
                'summary' => 'An insomniac office worker and a devil-may-care soap maker form an underground fight club that evolves into something much, much more.',
                'genres' => json_encode(['Drama'])
            ],
            [
                'title' => 'The Matrix',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'summary' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'genres' => json_encode(['Action', 'Sci-Fi'])
            ]
        ];

        DB::table('movies')->insert($movies);
    }
}
