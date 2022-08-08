<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlanetTableSeeder::class);
        $this->call(RaceTableSeeder::class);
        $this->call(CharactersTableSeeder::class);
        $this->call(FilmTableSeeder::class);
    }
}
