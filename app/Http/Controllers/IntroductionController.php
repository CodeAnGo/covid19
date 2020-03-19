<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function index(Request $request){
        $request->session()->start();
        if(Record::where('session', $request->session()->getId())->count() == 0){
            Record::create([
                'session' => $request->session()->getId()
            ]);
        }
        return view('steps.Introduction');
    }
}
