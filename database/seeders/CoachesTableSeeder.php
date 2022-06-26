<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('coaches')->insert([
            'name' => 'Сергій Зуб',
            'sports_rank' => 'МСМК з пауерліфтингу',
            'image_url' => 'img/sergiy-zub.png'
        ]);
        DB::table('coaches')->insert([
            'name' => 'Катерина Хватько',
            'sports_rank' => 'КМС з кросфіту',
            'image_url' => 'img/katerina-hvatko.png'
        ]);
        DB::table('coaches')->insert([
            'name' => 'Олена Волочай',
            'sports_rank' => 'МС з гімнастики',
            'image_url' => 'img/olena-volochay.png'
        ]);
        DB::table('coaches')->insert([
            'name' => 'Віктор Репенко',
            'sports_rank' => 'МСМК з легкої атлетики',
            'image_url' => 'img/viktor-repenko.png'
        ]);
    }
}
