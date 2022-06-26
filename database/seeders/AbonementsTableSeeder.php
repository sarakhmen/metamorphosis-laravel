<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonementsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('abonements')->insert([
            'name' => 'Стандарт',
            'price' => 399,
            'description' => 'Тренування з 12:00 по 22:00;;;'
        ]);
        DB::table('abonements')->insert([
            'name' => 'Преміум',
            'price' => 599,
            'description' => 'Тренування з 9:00 по 23:00;Програма тренувань;;'
        ]);
        DB::table('abonements')->insert([
            'name' => 'Платинум',
            'price' => 999,
            'description' => 'Тренування цілодобово;Програма тренувань;Програма харчування;Басейн'
        ]);
    }
}
