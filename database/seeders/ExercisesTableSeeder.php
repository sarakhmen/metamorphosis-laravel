<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExercisesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('exercises')->insert([
            'name' => 'Вправи на канаті',
            'description' => 'Пн. та Вт., 12:00 - 15:00',
            'image_url' => 'img/rope-exercises.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Акробатичні трюки',
            'description' => 'Сб. та Нд., 9:00 - 12:00',
            'image_url' => 'img/acrobatics.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Кардіо схема',
            'description' => 'Вт. та Чт., 18:00 - 20:00',
            'image_url' => 'img/cardio.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Пауерліфтинг',
            'description' => 'Пн. та Сб., 16:00 - 20:00',
            'image_url' => 'img/powerliftings.png'
        ]);
    }
}
