<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'first_name'=>'Люк',
                'last_name'=>'Скайуокер',
                'middle_name'=>'',
                'birth_date'=>'19 ДБЯ',
                'gender'=>'Мужской',
                'height'=>'172',
                'planet_id'=>1,
                'race_id'=>1,
                'films_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'first_name'=>'Хан',
                'last_name'=>'Соло',
                'middle_name'=>'',
                'birth_date'=>'29 ДБЯ',
                'gender'=>'Мужской',
                'height'=>'180',
                'planet_id'=>2,
                'race_id'=>1,
                'films_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'first_name'=>'Джабба',
                'last_name'=>'Десилиджик',
                'middle_name'=>'Тиуре',
                'birth_date'=>'600 ДБЯ',
                'gender'=>'Гермафродит',
                'height'=>'390',
                'planet_id'=>3,
                'race_id'=>2,
                'films_id'=>1,
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ]);
    }
}
