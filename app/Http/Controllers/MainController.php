<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function landing(Request $request){
        $subscribed_abonement = $request->input('subscribed_abonement');
        return view('landing-page', ['subscribed_abonement'=>$subscribed_abonement]);
    }

    public function info(){
        return view('info-page');
    }

    public function container(){
        return view('container-page');
    }

}
