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
        DB::table('exercises')->insert([
            'name' => 'Гімнастика',
            'description' => 'Пн., Ср та Пт., 14:00 - 16:00',
            'image_url' => 'img/gymnastics.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Армреслінг',
            'description' => 'Пн. - Пт. 19:00 - 20:00',
            'image_url' => 'img/arm.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Бодібілдинг',
            'description' => 'Пн. - Сб. 17:00 - 19:00',
            'image_url' => 'img/bodybuilding.png'
        ]);
        DB::table('exercises')->insert([
            'name' => 'Бокс',
            'description' => 'Вт., Чт. та Сб. 15:00 - 17:00',
            'image_url' => 'img/boxing.png'
        ]);
    }
}
