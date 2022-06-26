<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisitorsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('visitors')->insert([
            'name' => 'Artur Sarakhman',
            'email' => 'artur.sarahman@gmail.com',
            'phone_number' => '0971266262',
            'abonement_id' => '1'
        ]);
        DB::table('visitors')->insert([
            'name' => 'Oleg Repenko',
            'email' => 'oleg.repenko@gmail.com',
            'phone_number' => '0988317171',
            'abonement_id' => '2'
        ]);
        DB::table('visitors')->insert([
            'name' => 'Stanislav Sokolov',
            'email' => 'stas.sokolov@gmail.com',
            'phone_number' => '0988317190',
            'abonement_id' => '1'
        ]);
    }
}
