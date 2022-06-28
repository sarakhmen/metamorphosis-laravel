<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseSubscriptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('exercise_subscriptions')->insert([
            'visitor_name' => 'Артур Сарахман',
            'visitor_email' => 'artur.sarahman@gmail.com',
            'visitor_phone' => '+380971266262',
            'exercise_id' => '1'
        ]);
        DB::table('exercise_subscriptions')->insert([
            'visitor_name' => 'Олег Репенко',
            'visitor_email' => 'oleg.repenko@gmail.com',
            'visitor_phone' => '+380971266261',
            'exercise_id' => '2'
        ]);
    }
}
