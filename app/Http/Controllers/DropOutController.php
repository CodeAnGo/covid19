<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropOutController extends Controller
{
    public function NoSymptoms(Request $request){
        return view('dropouts.NoSymptoms');
    }

    public function WeekIsolationAdvice(Request $request){
        return view('dropouts.WeekIsolation');
    }

    public function Call111Advice(Request $request){
        return view('dropouts.Call111Advice');
    }
}
