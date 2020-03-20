<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ExistingTestResultsController extends Controller
{
    public function HaveYouAlreadyBeenTestedForCoronavirusIndex(){
        return view('steps.ExistingTestResults.HaveYouBeenTestedQuestion');
    }

    public function HaveYouAlreadyBeenTestedForCoronavirusStore(Request $request){
        if ($request->input('tested') == 'yes'){
            return redirect('/date-of-last-test'); // Continue Existing Test Results Path
        } else {
            return redirect('/symptoms'); // Drop out to Symptoms Path
        }
    }

    public function WhatWasTheDateOfLastTestIndex(){
        return view('steps.ExistingTestResults.DateOfLastTest');
    }

    public function WhatWasTheDateOfLastTestStore(Request $request){
        $dot = $request->input('day-of-test');
        $mot = $request->input('month-of-test');
        $yot = $request->input('year-of-test');
        $fdot = Carbon::createFromDate($yot, $mot, $dot);
        return redirect('/have-you-been-tested-more-than-once');
    }

    public function HaveYouBeenTestedMoreThanOnceIndex(){
        return view('steps.ExistingTestResults.HaveYouBeenTestedMoreThanOnce');
    }

    public function HaveYouBeenTestedMoreThanOnceStore(Request $request){
        if ($request->input('tested') == 'yes'){

        } else {

        }
        return redirect('/has-your-condition-worsened-since-your-last-test');
    }

    public function HasYourConditionWorsenedSinceYourLastTestIndex(){
        return view('steps.ExistingTestResults.HasYourConditionWorsenedSinceYourLastTestQuestion');
    }

    public function HasYourConditionWorsenedSinceYourLastTestStore(Request $request){
        if ($request->input('worse') == 'yes'){

        } else {

        }
        return redirect('/symptoms');
    }
}
