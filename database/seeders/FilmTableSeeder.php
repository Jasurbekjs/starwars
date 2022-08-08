<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('films')->insert([
            [
                'name'=>'Эпизод VI: Возвращение джедая',
                'budget'=>'32,500,000',
                'date'=>date("1983-05-25"),
                'link'=>'https://www.imdb.com/title/tt0086190/',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
    }
}
