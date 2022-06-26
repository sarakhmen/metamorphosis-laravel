<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbacksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('feedbacks')->insert([
            'name' => 'Кирило Сокирка',
            'job' => '.NET Developer',
            'comment' => 'Я завжди думав, що поєднувати 8 годин програмування та 4 години КПІ зі спортом нереально. Велике дякую тренерам, допомогли досягнути першої сотні в жимі лежачи! Не розумію тільки, чому зляться на мене, коли проводжу код-рев’ю їхніх програм.',
            'avatar_url' => 'img/sokirka-review.png'
        ]);
        DB::table('feedbacks')->insert([
            'name' => 'Богдан Чуй',
            'job' => 'Агроном',
            'comment' => 'Грузив якось ящики з ранніми яблуками і щось вистрілило в спині. Мала запропонувала найняти когось, а я запропонував піти ліпити вареники тихенько. Походив півроку в Метаморфозу, і тепер згадую про спину, тільки коли виконую третю лабораторну з веба.',
            'avatar_url' => 'img/chuy-review.png'
        ]);
    }
}
