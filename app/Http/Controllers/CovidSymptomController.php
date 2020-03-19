<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidSymptomController extends Controller
{
    public function index(Request $request){
        return view('steps.CovidSymptomsQuestion');
    }

    public function store(Request $request){
        if ($request->input('has-symptoms') === 'no'){
            return redirect('/no-symptoms');
        }
        $request->session()->reflash();
        return redirect('/severity');
    }
}
