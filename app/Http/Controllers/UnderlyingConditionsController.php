<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnderlyingConditionsController extends Controller
{
    public function index(Request $request){
        return view('steps.UnderlyingConditionsQuestion');
    }

    public function store(Request $request){
        return redirect('/do-you-work-away-from-your-home');
    }
}
