<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('races')->insert([
            [
                'name'=>'Человек',
                'height_average'=>'180',
                'life_average'=>'100',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Хатты',
                'height_average'=>'350',
                'life_average'=>'1000',
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
    }
}
