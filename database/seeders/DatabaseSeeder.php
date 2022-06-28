<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AbonementsTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);
        $this->call(ExercisesTableSeeder::class);
        $this->call(ExerciseVisitorTableSeeder::class);
        $this->call(CoachesTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(AbonementSubscriptionsTableSeeder::class);
        $this->call(ExerciseSubscriptionsTableSeeder::class);
    }
}
