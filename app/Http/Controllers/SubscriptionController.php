<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbonementSubscriptionPostRequest;
use App\Http\Requests\ExerciseSubscriptionPostRequest;
use App\Mail\NotifyAboutSubscription;
use App\Models\Abonement;
use App\Models\AbonementSubscription;
use App\Models\Exercise;
use App\Models\ExerciseSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class SubscriptionController extends Controller
{
    public function subscribeOnAbonement(AbonementSubscriptionPostRequest $request, $abonementId){
        $visitor_name = $request->input('visitor_name');
        $visitor_email = $request->input('visitor_email');
        $visitor_phone = $request->input('visitor_phone');
        AbonementSubscription::create([
            'visitor_name'=> $visitor_name,
            'visitor_email'=> $visitor_email,
            'visitor_phone'=> $visitor_phone,
            'abonement_id'=>$abonementId
        ]);

        $abonement = Abonement::where('id', '=', $abonementId)->first();
        Mail::to($visitor_email)->send(new NotifyAboutSubscription($visitor_name, 'Абонемент', $abonement->name));

        return redirect(url()->previous());
    }

    public function subscribeOnExercise(ExerciseSubscriptionPostRequest $request, $exerciseId){
        $visitor_name = $request->input('visitor_name');
        $visitor_email = $request->input('visitor_email');
        $visitor_phone = $request->input('visitor_phone');
        ExerciseSubscription::create([
            'visitor_name'=> $visitor_name,
            'visitor_email'=> $visitor_email,
            'visitor_phone'=> $visitor_phone,
            'exercise_id'=>$exerciseId
        ]);

        $exercise = Exercise::where('id', '=', $exerciseId)->first();
        Mail::to($visitor_email)->send(new NotifyAboutSubscription($visitor_name, 'Заняття', $exercise->name));

        return redirect(url()->previous());
    }
}
