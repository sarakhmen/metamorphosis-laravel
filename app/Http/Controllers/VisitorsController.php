<?php

namespace App\Http\Controllers;

use App\Models\Abonement;
use App\Models\Visitor;

class VisitorsController extends Controller
{
    public function test(){
        $visitors = Visitor::all();
        $visitorExercises = Visitor::where('email', 'artur.sarahman@gmail.com')->first()->exercises()->get();
        $abonements = Abonement::get();
        $abonementVisitors = Abonement::where('name', 'Стандарт')->first()->visitors()->get();
        return 'success';
    }

}
