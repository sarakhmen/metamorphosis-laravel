<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExerciseVisitorTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('exercise_visitor')->insert([
            'exercise_id' => '1',
            'visitor_id' => '1',
        ]);
        DB::table('exercise_visitor')->insert([
            'exercise_id' => '2',
            'visitor_id' => '1',
        ]);
        DB::table('exercise_visitor')->insert([
            'exercise_id' => '3',
            'visitor_id' => '1',
        ]);
    }
}
