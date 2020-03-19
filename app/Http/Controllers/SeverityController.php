<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class SeverityController extends Controller
{
    public function index(Request $request){
        return view('steps.SeverityQuestion');
    }

    public function store(Request $request){
        $answer = $request->input('severe');
        if($answer === 'yes'){
            Record::where('session', $request->session()->getId())->update([
                'severity' => true
            ]);
        } else {
            Record::where('session', $request->session()->getId())->update([
                'severity' => false
            ]);
        }
        return redirect('/underlying-conditions');
    }
}
