<?php

namespace App\Http\Controllers;

use App\Models\Abonement;
use Illuminate\Http\Request;

class AbonementsController
{
    public function subscribe(Request $request, $abonementUid){
        $visitorName = $request->input("visitorName");
        $visitorEmail = $request->input("visitorEmail");
        $abonement = new Abonement();
        $abonement->setName($abonementUid);
//        $abonement->setPrice(500);
//        $abonement->setBenefits("Тренування з 12:00 по 22:00");
        return redirect()->route('landing', ['subscribed_abonement' => $abonementUid, 'visitorName' => $visitorName, 'visitorEmail'=>$visitorEmail]);
    }


}
