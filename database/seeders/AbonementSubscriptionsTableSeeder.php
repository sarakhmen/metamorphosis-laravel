<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonementSubscriptionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('abonement_subscriptions')->insert([
            'visitor_name' => 'Артур Сарахман',
            'visitor_email' => 'artur.sarahman@gmail.com',
            'visitor_phone' => '+380971266262',
            'abonement_id' => '1'
        ]);
        DB::table('abonement_subscriptions')->insert([
            'visitor_name' => 'Олег Репенко',
            'visitor_email' => 'oleg.repenko@gmail.com',
            'visitor_phone' => '+380971266261',
            'abonement_id' => '2'
        ]);
    }
}
