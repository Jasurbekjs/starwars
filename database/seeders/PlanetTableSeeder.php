<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('planets')->insert([
            [
                'name'=>'Татуин',
                'diameter'=>'10465',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Кореллия',
                'diameter'=>'11 000',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Нал-Хатта',
                'diameter'=>'12150',
                'created_at'=>now(),
                'updated_at'=>now()
            ]             
        ]);
    }
}
