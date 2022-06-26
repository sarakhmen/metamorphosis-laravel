<?php

namespace App\Http\Controllers;

use App\Models\Abonement;
use App\Models\Coach;
use App\Models\Exercise;
use App\Models\Feedback;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function landing(Request $request){
        $subscribed_abonement = $request->input('subscribed_abonement');
        $exercises = Exercise::all()->take(4);
        $abonements = Abonement::all();
        return view('landing-page', ['subscribed_abonement'=>$subscribed_abonement, 'exercises'=>$exercises, 'abonements'=>$abonements]);
    }

    public function info(){
        $coaches = Coach::all();
        $feedbacks = Feedback::all();
        return view('info-page', ['coaches'=>$coaches, 'feedbacks'=>$feedbacks]);
    }

    public function container(){
        $exercises = Exercise::all();
        return view('container-page', ['exercises'=>$exercises]);
    }

}
